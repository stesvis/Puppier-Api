<?php

namespace Database\Factories;

use App\Models\Listing;
use App\Models\ListingComment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ListingComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = new User();
        if ($this->faker->boolean(10)) {
            $user = User::inRandomOrder()->first();
        } else {
            $user['name'] = $this->faker->name;
            $user['email'] = $this->faker->safeEmail;
        }

        $user_id = $user->id > 0 ? $user->id : null;

        return [
            'listing_id' => Listing::inRandomOrder()->first()->id,
            'user_id' => $user_id,
            'name' => $user->name,
            'email' => $user->email,
            'message' => $this->faker->realText(),
            'created_by' => $user_id,
            'updated_by' => $user_id,
        ];
    }
}
