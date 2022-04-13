<?php
require_once(__DIR__ . '/Crawler.php');
require_once(__DIR__ . '/Review.php');
require_once(__DIR__ . '/../helper/JsonSaver.php');

class CrawlerReviews extends Crawler
{
    public function __construct($link) {
        parent::__construct($link);
    }

    public function getReviews()
    {
        $domdoc = new DOMDocument();
        $output = parent::curl();
        $domdoc->loadHTML($output);
        $xpath = new DOMXPath($domdoc);
        $query = "//p[@data-test-id = 'opinion-comment']";
        $matches = $xpath->query($query);
        $reviews = [];
        foreach ($matches as $match) {
            $review = new Review(trim(strip_tags($match->nodeValue)));
            $reviews[] = $review->toArray();
        }
        $jsonSaver = new JsonSaver(__DIR__ . "/../data/reviews.json");
        $jsonSaver->save($reviews);
    }
}
