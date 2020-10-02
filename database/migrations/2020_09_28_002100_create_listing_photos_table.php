<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id')->constrained();
            $table->string('path');
            $table->string('public_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listing_photos', function (Blueprint $table) {
            $table->dropForeign(['listing_id']);
        });

        Schema::dropIfExists('listing_photos');
    }
}
