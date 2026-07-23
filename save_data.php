<?php
$data = file_get_contents('php://input');
if ($data !== false && $data !== '') {
    file_put_contents('patients_data.json', $data);
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Нет данных']);
}
?>