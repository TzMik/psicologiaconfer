<?php
$fileData = file_get_contents(__DIR__ . "/../data/reviews.json");
$reviews = json_decode($fileData);