<?php
require_once __DIR__ . "/../models/Book.php";
require_once __DIR__ . "/../helper/UrlGenerator.php";

const BOOKS_PER_ITERATION = 1000;
const SITEMAP_PATH = __DIR__ . "/../sitemap.xml";

echo "Comenzando..." . PHP_EOL;
$booksAmount = Book::amount();
$iterations = ceil($booksAmount / BOOKS_PER_ITERATION);
echo "Se van a hacer " . $iterations . " iteraciones" . PHP_EOL;
try {
    $file = fopen(SITEMAP_PATH, "w");
    fwrite($file, '<?xml version="1.0" encoding="UTF-8"?>');
    fwrite($file, '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">');
    for ($i = 0; $i < $iterations; $i++) {
        $books = Book::getList($i + 1, BOOKS_PER_ITERATION);
        foreach ($books as $book) {
            fwrite($file, '<url>');
            fwrite($file, '<loc>https://psicologiaconfer.com/libro/' . UrlGenerator::createUrlCanonical($book->title) . '-' . $book->id . '</loc>');
            fwrite($file, '<lastmod>' . $book->lastModification . '</lastmod>');
            fwrite($file, '</url>');
        }
        echo ($i + 1) . "ª iteración realizada" . PHP_EOL;
        sleep(1);
    }
    fwrite($file, '</urlset>');
    fclose($file);
    echo "Terminado" . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}
