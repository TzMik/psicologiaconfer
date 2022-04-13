<?php

class JsonSaver {

    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function save($data)
    {
        $file = fopen($this->filePath, "w+");
        fwrite($file, json_encode($data));
    }
}