<?php
if (empty($_GET['request'])) {
    http_response_code(400);
    exit;
}

require_once(__DIR__ . "/../config/specialRoutes.php");
require_once __DIR__ . "/../models/Book.php";

$requests = explode('-', $_GET['request']);
$bookId = array_pop($requests);
$book = Book::get($bookId);

$metaTitle = $book->getAttribute('title') . " - " . $book->getAttribute('author');