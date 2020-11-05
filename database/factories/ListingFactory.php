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
        $listing_category = ListingCategory::inRandomOrder()->first();
        $user = User::inRandomOrder()->first(); // User::all('id')->random();
        $user_id = $user->id;

        if ($this->faker->boolean(10)) {
            $email = $this->faker->safeEmail;
        } else {
            $email = $user->email;
        }

        if ($this->faker->boolean(10)) {
            $phone = $this->faker->e164PhoneNumber;
        } else {
            if ($this->faker->boolean(10)) {
                $phone = $user->phone;
            } else {
                $phone = null;
            }
        }

        return [
            'user_id' => $user_id,
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->text,
            'email' => $email,
            'phone' => $phone,
            'location' => $this->faker->latitude.','.$this->faker->longitude,
            'address' => $this->faker->city.', '.$this->faker->stateAbbr,
            'price' => $listing_category->name === 'Dog' ? $this->faker->randomFloat(2, 250, 5000) : $this->faker->randomFloat(2, 0, 200),
            'listing_category_id' => $listing_category->id,
            'show_contact_phone' => $this->faker->boolean,
            'created_by' => $user_id,
            'updated_by' => $user_id,
        ];
    }
}
