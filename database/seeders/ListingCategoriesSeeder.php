<?php

namespace Database\Seeders;

use App\Models\ListingCategory;
use Illuminate\Database\Seeder;

class ListingCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListingCategory::create(['name' => 'Cat']);
        ListingCategory::create(['name' => 'Dog']);
    }
}
