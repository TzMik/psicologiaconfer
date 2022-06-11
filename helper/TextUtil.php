<?php
class TextUtil
{
    public static function getFirstWords($text, $numberOfWords = 10) {
        $words = explode(' ', $text);
        $result = "";
        if (count($words) <= $numberOfWords) {
            $result = $text;
        } else {
            $words = array_slice($words, 0, $numberOfWords);
            $result = implode(' ', $words) . "...";
        }
        return $result;
    }
}
