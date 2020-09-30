<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\ListingPhoto;
use Illuminate\Database\Seeder;

class ListingPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $listings = Listing::all();

        foreach ($listings as $listing) {
            $photos_count = rand(1, 5);

            for ($i = 0; $i < $photos_count; $i++) {
                $public_url = $listing->category->name === 'Dog' ? $faker->imageUrl(1200, 1200, 'animals') : $faker->imageUrl(1200, 1200, 'cats');

                ListingPhoto::create([
                    'listing_id' => $listing->id,
                    'public_url' => $public_url,
                    'path' => '/listing_photos/'.$listing->id.'/'.$faker->md5.'.jpg',
                ]);
            }
        }
    }
}
