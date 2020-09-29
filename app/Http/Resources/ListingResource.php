<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class ListingResource extends BaseResource
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

        $listing = parent::toArray($request);
        $listing[] = $this->mergeWhen(
            !isset($listing['user']) &&
            ($includes->contains('user') || $includes->contains('listings.user')),
            [
                'user' => new UserResource($this->user), // additional field
            ]);
        $listing[] = $this->mergeWhen(
            !isset($listing['category']) &&
            ($includes->contains('category') || $includes->contains('listings.category')),
            [
                'category' => new ListingCategoryResource($this->category), // additional field
            ]);
        $listing[] = $this->mergeWhen(
            !isset($listing['photos']) &&
            ($includes->contains('photos') || $includes->contains('listings.photos')),
            [
                'photos' => new ListingPhotoResourceCollection($this->photos), // additional field
            ]);
        $listing[] = $this->mergeWhen(
            !isset($listing['comments']) &&
            ($includes->contains('comments') || $includes->contains('listings.comments')),
            [
                'comments' => new ListingCommentResourceCollection($this->comments), // additional field
            ]);
        $listing['tags'] = [];

        return $listing;
//        return parent::toArray($request);

        // Custom
//        return [
//            'title' => $this->title,
//        ];
    }
}
