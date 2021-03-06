<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class TokenResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'access_token' => $this->access_token,
            'token_type' => $this->token_type,
        ];
    }
}
