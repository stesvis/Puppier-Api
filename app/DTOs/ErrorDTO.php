<?php


namespace App\DTOs;


use Illuminate\Http\Response;

class ErrorDTO
{
    public $code;
    public $message;
    public $details;

    public function __construct($message = 'An error occurred.', $code = Response::HTTP_INTERNAL_SERVER_ERROR, $details = '')
    {
        $this->message = $message;
        $this->code = $code;
        $this->details = $details;
    }
}
