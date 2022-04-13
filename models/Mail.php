<?php
class Mail {
    private const to = "canteromikel@gmail.com";
    private const subject = "Contacto a través de la web";
    private $message;

    public function __construct($message) {
        $this->message = $message;
    }

    public function send()
    {
        return mail(self::to, self::subject, $this->message);
    }
}