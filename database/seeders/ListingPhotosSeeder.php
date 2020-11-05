<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\ListingPhoto;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Xvladqt\Faker\LoremFlickrProvider;

class ListingPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $faker->addProvider(new LoremFlickrProvider($faker));
        $listings = Listing::all();

        foreach ($listings as $listing) {
            $photos_count = rand(1, 5);

            for ($i = 0; $i < $photos_count; $i++) {
//                $public_url = $listing->category->name === 'Dog' ? $faker->imageUrl(1200, 850, 'animals') : $faker->imageUrl(1200, 850, 'cats');
                $public_url = $listing->category->name === 'Dog' ? $faker->imageUrl(1200, 850, ['dogs'], true) : $faker->imageUrl(1200, 850, ['cats'], true);

                ListingPhoto::create([
                    'listing_id' => $listing->id,
                    'public_url' => $public_url,
                    'path' => '/listing_photos/'.$listing->id.'/'.$faker->md5.'.jpg',
                    'created_by' => $listing->created_by,
                    'updated_by' => $listing->created_by,
                ]);
            }
        }
    }
}
