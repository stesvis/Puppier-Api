<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class ListingCategoryResource extends BaseResource
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

        $listing_category = parent::toArray($request);
        $listing_category[] = $this->mergeWhen(!isset($listing_category['listings']) && $includes->contains('listings'), [
            'listings' => new ListingResourceCollection($this->listings), // additional field
        ]);

        return $listing_category;
    }
}
