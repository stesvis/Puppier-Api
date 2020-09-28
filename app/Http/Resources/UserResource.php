<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class UserResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        $includes = parent::getIncludes($request);

        $user = parent::toArray($request);
        $user[] = $this->mergeWhen(!isset($user['listings']) && ($includes->contains('listings')), [
            'listings' => new ListingResourceCollection($this->listings), // additional field
        ]);

        return $user;
//        return [
//            'name' => $this->name,
//        ];
    }
}
