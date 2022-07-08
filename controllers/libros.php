<?php
require_once __DIR__ . "/../models/Book.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../helper/TextUtil.php";
require_once __DIR__ . "/../helper/UrlGenerator.php";

const BOOKS_PER_PAGE = 12;
const CATEGORIES_PER_PAGE = 12;

if (!empty($_GET['request'])) {
    $requests = explode('-', $_GET['request']);
    $categoryId = array_pop($requests);
    $category = Category::get($categoryId);
    $bookList = $category->getPostList(1, CATEGORIES_PER_PAGE);
} else {
    $bookList = Book::getList(1, BOOKS_PER_PAGE);
}

$categoryList = Category::getList(1, CATEGORIES_PER_PAGE);