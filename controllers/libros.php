<?php
require_once __DIR__ . "/../models/Book.php";
require_once __DIR__ . "/../helper/TextUtil.php";

const BOOKS_PER_PAGE = 1;

$bookList = Book::getList(1, BOOKS_PER_PAGE);