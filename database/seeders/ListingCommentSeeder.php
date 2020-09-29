<?php

namespace Database\Seeders;

use App\Models\ListingComment;
use Illuminate\Database\Seeder;

class ListingCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListingComment::factory(30)
            ->create();
    }
}
