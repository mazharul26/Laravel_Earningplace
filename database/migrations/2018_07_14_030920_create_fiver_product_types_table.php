<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiverProductTypesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('fiver_product_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name', 100);
            $table->unsignedInteger('servicetype_id');
            $table->foreign('servicetype_id')->references('id')->on('fiver_servicetypes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('fiver_product_types');
    }

}
