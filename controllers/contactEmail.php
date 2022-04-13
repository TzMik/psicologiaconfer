<?php
require_once(__DIR__ . "/../models/Mail.php");

$data = json_decode(file_get_contents("php://input"), true);
if (isset($data['message'])) {
    $mail = new Mail($data['message']);
    $response = [];
    if ($mail->send()) {
        $response['valid'] = true;
    } else {
        http_response_code(500);
        $response['error'] = true;
    }
    exit($data['message']);
} else {
    http_response_code(400);
    $response['error'] = true;
}
echo json_encode($response);