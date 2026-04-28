<?php
// dashboard.php

// 1. Load Data
$dataFile = __DIR__ . '/survey-responses.json';
$responses = [];
if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $responses = json_decode($json, true) ?? [];
}

// 2. Process Data
$totalResponses = count($responses);
$unitA_Interest = 0; // 3 Bedrooms
$unitB_Interest = 0; // 2 Bedrooms
$budgets = [];
$amenities = [];
$floors = [];
$sources = []; // Own vs Rent

foreach ($responses as $r) {
    // Unit Logic: "Three bedrooms" -> Unit A, "Two bedrooms" -> Unit B
    $beds = $r['bedrooms'] ?? '';
    if (stripos($beds, 'Three') !== false) {
        $unitA_Interest++;
    } elseif (stripos($beds, 'Two') !== false) {
        $unitB_Interest++;
    }

    // Budget
    $b = $r['budget'] ?? 'Unknown';
    if (!isset($budgets[$b])) $budgets[$b] = 0;
    $budgets[$b]++;

    // Floors
    $f = $r['floor'] ?? 'Unknown';
    if (!isset($floors[$f])) $floors[$f] = 0;
    $floors[$f]++;

    // Amenities (Checkbox array)
    $am = $r['amenities'] ?? [];
    if (is_array($am)) {
        foreach ($am as $item) {
            // Handle nested arrays (e.g. [["Pool"], ["Gym"]]) produced by some JS serializers
            if (is_array($item)) {
                $item = $item[0] ?? '';
            }
            
            if (is_string($item) && $item !== '') {
                if (!isset($amenities[$item])) $amenities[$item] = 0;
                $amenities[$item]++;
            }
        }
    }

    // Current Status
    $status = $r['current_status'] ?? 'Unknown';
    if (!isset($sources[$status])) $sources[$status] = 0;
    $sources[$status]++;
}

// Prepare Data for JS
$budgetLabels = array_keys($budgets);
$budgetValues = array_values($budgets);

$amenityLabels = array_keys($amenities);
$amenityValues = array_values($amenities);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Las Lomas Survey Dashboard</title>
    <link rel="icon" href="/img/shared/favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="/img/shared/logo-fallback.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="dashboard-container">
    
    <!-- HEADER -->
    <div class="dashboard-header">
        <div>
            <h1>Survey Analytics Dashboard</h1>
            <div class="last-updated">Last updated: <?php echo date('Y-m-d H:i:s'); ?></div>
        </div>
        <div>
            <a href="index.php" style="color: var(--color-primary); text-decoration: none; font-weight: 600;">&larr; Back to Site</a>
        </div>
    </div>

    <!-- KPIs -->
    <div class="kpi-grid">
        <div class="kpi-card">
            <div class="kpi-label">Total Responses</div>
            <div class="kpi-value"><?php echo $totalResponses; ?></div>
        </div>
        <div class="kpi-card">
            <div class="kpi-label">Unit A Interest (3 Bed)</div>
            <div class="kpi-value"><?php echo $unitA_Interest; ?></div>
        </div>
        <div class="kpi-card">
            <div class="kpi-label">Unit B Interest (2 Bed)</div>
            <div class="kpi-value"><?php echo $unitB_Interest; ?></div>
        </div>
         <div class="kpi-card">
            <div class="kpi-label">Conversion Rate</div>
            <div class="kpi-value"><?php echo ($totalResponses > 0) ? round(($unitA_Interest + $unitB_Interest) / $totalResponses * 100) . '%' : '0%'; ?></div>
        </div>
    </div>

    <!-- UNIT VISUALIZATION REQUESTED -->
    <div class="section-title">Unit Preference Visualizer</div>
    <div class="units-viz-grid">
        
        <!-- BLOCK A (3 BEDROOMS) -->
        <div class="unit-card">
            <div class="unit-card-header">
                <h3>Bloque A (3 Bedrooms)</h3>
                <span class="unit-count-badge"><?php echo $unitA_Interest; ?> Interested</span>
            </div>
            <div class="unit-image-container">
                <!-- Using BloqueA.png from request -->
                <img src="img/BloqueA.png" alt="Bloque A" onerror="this.src='https://placehold.co/600x400?text=BloqueA.png+Not+Found'">
            </div>
            <div class="unit-stats">
                <div class="stat-row">
                    <span>Base Price</span>
                    <strong>$120,000+</strong>
                </div>
                <div class="stat-row">
                    <span>Target Audience</span>
                    <strong>Families</strong>
                </div>
                <!-- Logic to show top preferences for this group could go here -->
            </div>
        </div>

        <!-- BLOCK B (2 BEDROOMS) -->
        <div class="unit-card">
            <div class="unit-card-header">
                <h3>Bloque B (2 Bedrooms)</h3>
                <span class="unit-count-badge"><?php echo $unitB_Interest; ?> Interested</span>
            </div>
            <div class="unit-image-container">
                <!-- Using BloqueB.PNG from request (note capital PNG) -->
                <img src="img/BloqueB.png" alt="Bloque B" onerror="this.src='https://placehold.co/600x400?text=BloqueB.PNG+Not+Found'">
            </div>
            <div class="unit-stats">
                <div class="stat-row">
                    <span>Base Price</span>
                    <strong>$90,000+</strong>
                </div>
                <div class="stat-row">
                    <span>Target Audience</span>
                    <strong>Couples/Investors</strong>
                </div>
            </div>
        </div>

    </div>

    <!-- CHARTS -->
    <div class="section-title">Deep Dive Analytics</div>
    <div class="charts-grid">
        <div class="chart-card">
            <h3>Budget Ranges</h3>
            <canvas id="budgetChart"></canvas>
        </div>
        <div class="chart-card">
            <h3>Top Amenities Wanted</h3>
            <canvas id="amenityChart"></canvas>
        </div>
        <div class="chart-card">
            <h3>Current Housing Status</h3>
            <canvas id="statusChart"></canvas>
        </div>
        <div class="chart-card">
            <h3>Floor Preference</h3>
            <canvas id="floorChart"></canvas>
        </div>
    </div>

    <!-- DATA TABLE -->
    <div class="section-title">Recent Responses</div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Bedrooms</th>
                    <th>Budget</th>
                    <th>Financing?</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Show last 50 responses reversed
                $reversed = array_reverse($responses);
                $slice = array_slice($reversed, 0, 50);
                foreach ($slice as $row): 
                    $bedClass = (stripos($row['bedrooms'] ?? '', 'Three') !== false) ? 'badge-a' : 'badge-b';
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['timestamp'] ?? $row['date'] ?? '-'); ?></td>
                    <td><?php echo htmlspecialchars($row['name'] ?? 'Anonymous'); ?></td>
                    <td><?php echo htmlspecialchars($row['contact'] ?? '-'); ?></td>
                    <td><span class="badge <?php echo $bedClass; ?>"><?php echo htmlspecialchars($row['bedrooms'] ?? '-'); ?></span></td>
                    <td>$<?php echo number_format((float)($row['budget'] ?? 0)); ?></td>
                    <td><?php echo htmlspecialchars($row['financing'] ?? '-'); ?></td>
                    <td>
                        <button class="btn-view" onclick='openModal(<?php echo htmlspecialchars(json_encode($row), ENT_QUOTES, "UTF-8"); ?>)'>View</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(empty($responses)): ?>
                    <tr><td colspan="6" style="text-align:center; padding: 2rem;">No responses yet.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    </div>

    <!-- DETAIL MODAL -->
    <div id="detailModal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">&times;</button>
            <h2 class="modal-title">Response Details</h2>
            <div id="modalBody">
                <!-- Content will be injected here -->
            </div>
        </div>
    </div>

</div>

<script>
    // Constants from PHP
    const budgetLabels = <?php echo json_encode($budgetLabels); ?>;
    const budgetData = <?php echo json_encode($budgetValues); ?>;
    
    const amenityLabels = <?php echo json_encode($amenityLabels); ?>;
    const amenityData = <?php echo json_encode($amenityValues); ?>;

    const statusLabels = <?php echo json_encode(array_keys($sources)); ?>;
    const statusData = <?php echo json_encode(array_values($sources)); ?>;

    const floorLabels = <?php echo json_encode(array_keys($floors)); ?>;
    const floorData = <?php echo json_encode(array_values($floors)); ?>;

    // Charts Config
    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { position: 'bottom' }
        }
    };

    // 1. Budget Chart (Pie)
    new Chart(document.getElementById('budgetChart'), {
        type: 'doughnut',
        data: {
            labels: budgetLabels,
            datasets: [{
                data: budgetData,
                backgroundColor: ['#1a5f3a', '#2d7a52', '#d4af37', '#8b6f47', '#e0e0e0']
            }]
        },
        options: commonOptions
    });

    // 2. Amenities Chart (Bar)
    new Chart(document.getElementById('amenityChart'), {
        type: 'bar',
        data: {
            labels: amenityLabels,
            datasets: [{
                label: 'Votes',
                data: amenityData,
                backgroundColor: '#1a5f3a',
                borderRadius: 4
            }]
        },
        options: {
            ...commonOptions,
            indexAxis: 'y'
        }
    });

    // 3. Status Chart (Pie)
    new Chart(document.getElementById('statusChart'), {
        type: 'pie',
        data: {
            labels: statusLabels,
            datasets: [{
                data: statusData,
                backgroundColor: ['#d4af37', '#1a5f3a']
            }]
        },
        options: commonOptions
    });

    // 4. Floor Chart (Bar)
    new Chart(document.getElementById('floorChart'), {
        type: 'bar',
        data: {
            labels: floorLabels,
            datasets: [{
                label: 'Preference',
                data: floorData,
                backgroundColor: '#8b6f47',
                borderRadius: 4
            }]
        },
        options: commonOptions
    });

    // Modal Logic
    const modal = document.getElementById('detailModal');
    const modalBody = document.getElementById('modalBody');

    function openModal(data) {
        let html = '';
        for (const [key, value] of Object.entries(data)) {
            let displayValue = value;
            
            // Format arrays (like amenities)
            if (Array.isArray(value)) {
                // Flatten nested arrays if any remaining
                const flat = value.flat(Infinity);
                displayValue = flat.join(', ');
            }
            
            // Format labels
            const label = key.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());

            html += `
                <div class="detail-row">
                    <span class="detail-label">${label}</span>
                    <span class="detail-value">${displayValue || '-'}</span>
                </div>
            `;
        }
        modalBody.innerHTML = html;
        modal.classList.add('active');
    }

    function closeModal() {
        modal.classList.remove('active');
    }

    // Close on outside click
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });

</script>

</body>
</html>
