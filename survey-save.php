<?php
// Set headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Debug info for GET requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode([
        'status' => 'info',
        'message' => 'Survey endpoint is working',
        'method' => $_SERVER['REQUEST_METHOD'],
        'time' => date('Y-m-d H:i:s')
    ]);
    exit();
}

try {
    $data = $_POST;
    $data['date'] = date('Y-m-d H:i:s');
    $data['ip'] = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

    $file = __DIR__ . '/survey-responses.json';

    $existing = file_exists($file)
        ? json_decode(file_get_contents($file), true)
        : [];

    if (!is_array($existing)) {
        $existing = [];
    }

    $existing[] = $data;

    $result = file_put_contents(
        $file,
        json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    if ($result === false) {
        throw new Exception('Failed to write to file');
    }

    echo json_encode(['status' => 'ok', 'message' => 'Survey saved successfully']);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Server error: ' . $e->getMessage()]);
}
