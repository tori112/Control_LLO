<?php
header('Content-Type: application/json');
header('Cache-Control: no-cache, must-revalidate');
echo json_encode(['serverDate' => date('d.m.Y')]);
?>