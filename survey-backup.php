<?php
// Backup survey handler - saves to text file
header('Content-Type: text/plain');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Survey backup endpoint is working - " . date('Y-m-d H:i:s');
    exit();
}

try {
    $data = $_POST;
    $timestamp = date('Y-m-d H:i:s');
    
    $file = __DIR__ . '/survey-responses.txt';
    
    $line = $timestamp . " | " . json_encode($data) . "\n";
    
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);
    
    echo "OK";
    
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
?>
