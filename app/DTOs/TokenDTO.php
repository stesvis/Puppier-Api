<?php


namespace App\DTOs;


class TokenDTO
{
    public $access_token;
    public $token_type;

    public function __construct($access_token, $token_type)
    {
        $this->access_token = $access_token;
        $this->token_type = $token_type;
    }
}
