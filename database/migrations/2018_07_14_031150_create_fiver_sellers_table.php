<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiverSellersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('fiver_sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sell_title', 200)->nullable();
            $table->string('file_upload', 200)->nullable();
            $table->unsignedInteger('categories_id')->nullable();
            $table->unsignedInteger('subcategories_id')->nullable();
            $table->unsignedInteger('product_type_id')->nullable();
            $table->unsignedInteger('delivery_duratin_id')->nullable();
            $table->unsignedInteger('searchtag_id')->nullable();
            $table->float('selling_price', 10, 2)->nullable();
            $table->unsignedInteger('users_id')->nullable();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('categories_id')->references('id')->on('fiver_categories');
            $table->foreign('subcategories_id')->references('id')->on('fiver_subcategories');
            $table->foreign('product_type_id')->references('id')->on('fiver_product_types');
            $table->foreign('delivery_duratin_id')->references('id')->on('fiver_delivery_durations');
            $table->foreign('searchtag_id')->references('id')->on('fiver_searchtags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('fiver_sellers');
    }

}
