<?php
class Review
{
    private $review;

    public function __construct($review) {
        $this->review = $review;
    }

    public function toArray()
    {
        return [
            "review" => $this->review
        ];
    }
}
