<?php
require_once __DIR__ . "/../models/Book.php";
require_once __DIR__ . "/../helper/TextUtil.php";
require_once __DIR__ . "/../helper/UrlGenerator.php";

const BOOKS_PER_PAGE = 12;

$bookList = Book::getList(1, BOOKS_PER_PAGE);