<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiverServicetypesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('fiver_servicetypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_name', 100);
            $table->unsignedInteger('subcategories_id');
            $table->foreign('subcategories_id')->references('id')->on('fiver_subcategories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('fiver_servicetypes');
    }

}
