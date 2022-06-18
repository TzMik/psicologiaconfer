<?php
class UrlGenerator{
    public static function createUrlCanonical ($string) {
        $url = "";
        $string = strtolower($string);
        $string = str_replace(
            ['á', 'é', 'í', 'ó', 'ú', 'ñ'],
            ['a', 'e', 'i', 'o', 'u', 'n'],
            $string
        );
        $string = preg_replace('/[^(\w\s)]*/', '', $string);
        $url = preg_replace('/\s/', '-', trim($string));
        return $url;
    }
}