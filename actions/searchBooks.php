<?php
require_once __DIR__ . "/../models/Book.php";

$response = [];
if (!empty($_POST['listSize'])) {
    $listSize = intval($_POST['listSize']);
    $response = Book::search($_POST['query'], $listSize);
}
echo json_encode($response);