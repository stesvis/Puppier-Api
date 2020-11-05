<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:500'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'listing_category_id' => ['required', 'exists:listing_categories,id'],
            'price' => ['required', 'numeric', 'min:0'],
            'phone' => ['string', 'nullable'],
            'address' => ['string', 'required'],
            'location' => ['string', 'required'],
        ];
    }
}
