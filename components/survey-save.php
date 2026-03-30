<?php
header('Content-Type: application/json');

$data = $_POST;
$data['date'] = date('Y-m-d H:i:s');

$file = __DIR__ . '/../survey-responses.json';

$existing = file_exists($file)
  ? json_decode(file_get_contents($file), true)
  : [];

$existing[] = $data;

file_put_contents(
  $file,
  json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

echo json_encode(['status' => 'ok']);
