<?php
class Crawler
{
    private $link;

    public function __construct($link) {
        $this->link = $link;
    }

    public function curl()
    {
        return shell_exec("curl '{$this->link}' --compressed");
    }
}
