<?php
// simulate_data.php
$file = __DIR__ . '/survey-responses.json';
$data = [];

// Generate 20 fake responses
for ($i = 0; $i < 20; $i++) {
    $isUnitA = rand(0, 1); // 50/50 chance
    
    $data[] = [
        'name' => 'User ' . ($i + 1),
        'contact' => 'user' . ($i + 1) . '@example.com',
        'bedrooms' => $isUnitA ? 'Three bedrooms' : 'Two bedrooms',
        'floor' => ['1st Floor', '2nd Floor', '3rd Floor'][rand(0, 2)],
        'budget' => ['$90,000 USD / RD$5,661,000', '$120,000 USD / RD$7,548,000'][rand(0, 1)],
        'amenities' => ['Pool', 'Gym', 'Security'],
        'financing' => rand(0, 1) ? 'Yes' : 'No',
        'current_status' => rand(0, 1) ? 'Own' : 'Rent',
        'timestamp' => date('Y-m-d H:i:s', strtotime('-' . rand(0, 100) . ' hours'))
    ];
}

file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
echo "Generated 20 sample responses in " . $file;
?>
