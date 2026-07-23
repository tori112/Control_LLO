<?php
$data = file_get_contents('php://input');
$logEntry = json_decode($data, true);
if ($logEntry) {
    $logLine = date('Y-m-d H:i:s') . ' | ' . 
               ($logEntry['doctor'] ?? '—') . ' | ' . 
               ($logEntry['action'] ?? '—') . ' | ' . 
               ($logEntry['details'] ?? '—') . PHP_EOL;
    file_put_contents('actions.log', $logLine, FILE_APPEND);
    echo 'ok';
} else {
    http_response_code(400);
}
?>