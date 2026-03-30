<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

echo json_encode([
    'status' => 'ok',
    'message' => 'PHP is working',
    'method' => $_SERVER['REQUEST_METHOD'],
    'data' => $_POST,
    'timestamp' => date('Y-m-d H:i:s')
]);
?>
