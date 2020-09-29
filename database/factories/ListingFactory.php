<?php

namespace Database\Factories;

use App\Models\Listing;
use App\Models\ListingCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Listing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, // User::all('id')->random();
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->text,
            'location' => $this->faker->latitude.','.$this->faker->longitude,
            'address' => $this->faker->city.', '.$this->faker->stateAbbr,
            'price' => $this->faker->randomFloat(2, 0, 5000),
            'listing_category_id' => ListingCategory::inRandomOrder()->first()->id,
            'show_contact_phone' => $this->faker->boolean,
        ];
    }
}
