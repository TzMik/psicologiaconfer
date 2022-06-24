<?php
require_once __DIR__ . "/../config/specialRoutes.php";
require_once __DIR__ . "/../models/Book.php";
require_once __DIR__ . "/../helper/UrlGenerator.php";
require_once __DIR__ . "/../helper/TextUtil.php";

$response = [];
if (!empty($_POST['listSize'])) {
    $listSize = intval($_POST['listSize']);
    $response = Book::search($_POST['query'], $listSize);
    foreach ($response as $key => $book) {
        $response[$key]->description = TextUtil::getFirstWords($book->description);
        $response[$key]->url = ROOT_PATH . "/libro/" . UrlGenerator::createUrlCanonical($book->title) . "-" . $book->id;
    }
}
echo json_encode($response);