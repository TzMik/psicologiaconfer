<?php
require_once __DIR__ . "/../models/Book.php";

$response = [];
if (!empty($_POST['page']) && !empty($_POST['listSize'])) {
    $page = intval($_POST['page']);
    $listSize = intval($_POST['listSize']);
    $response = Book::getList($page, $listSize);
}
echo json_encode($response);