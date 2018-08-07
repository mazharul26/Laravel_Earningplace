<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiverReviewsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('fiver_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rating', 50);
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('sell_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('sell_id')->references('id')->on('fiver_sellers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('fiver_reviews');
    }

}
