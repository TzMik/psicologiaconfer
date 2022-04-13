<?php

require_once(__DIR__ . "/../models/CrawlerReviews.php");

$doctoraliaCrawler = new CrawlerReviews("https://www.doctoralia.com.mx/maria-fernanda-quiroga-vidrio/psicologo/guadalajara#tab=profile-reviews");
$doctoraliaCrawler->getReviews();