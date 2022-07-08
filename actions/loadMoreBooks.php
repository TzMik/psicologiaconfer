<?php
require_once __DIR__ . "/../config/specialRoutes.php";
require_once __DIR__ . "/../models/Book.php";
require_once __DIR__ . "/../helper/UrlGenerator.php";
require_once __DIR__ . "/../helper/TextUtil.php";

$response = [];
if (!empty($_POST['page']) && !empty($_POST['listSize'])) {
    $page = intval($_POST['page']);
    $listSize = intval($_POST['listSize']);
    $response = Book::getList($page, $listSize);
    foreach ($response as $key => $book) {
        $book->description = TextUtil::getFirstWords($book->description);
        $book->url = ROOT_PATH . "/libro/" . UrlGenerator::createUrlCanonical($book->title) . "-" . $book->id;
    }
}
echo json_encode($response);