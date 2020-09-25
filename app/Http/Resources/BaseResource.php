<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function getIncludes(Request $request)
    {
        $includes = explode(',', $request['include']);
        $includesCollection = collect($includes);
        $includesCollection = $includesCollection->map(function ($include) {
            return trim($include);
        });

        return $includesCollection;
    }
}
