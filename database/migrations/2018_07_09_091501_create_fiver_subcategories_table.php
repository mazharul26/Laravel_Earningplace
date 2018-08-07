<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiverSubcategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('fiver_subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subcat_name', 100);
            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('fiver_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('fiver_subcategories');
    }

}
