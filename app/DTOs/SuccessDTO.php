<?php


namespace App\DTOs;


class SuccessDTO
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}
