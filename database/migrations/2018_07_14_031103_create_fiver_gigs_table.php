<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiverGigsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('fiver_gigs', function (Blueprint $table) {
            $table->increments('id');
         
            $table->unsignedInteger('categories_id');
            $table->unsignedInteger('subcategories_id');
            $table->unsignedInteger('service_id');
            $table->unsignedInteger('gigmetadata_id');
            $table->unsignedInteger('searchtag_id');
            $table->timestamps();
            $table->foreign('categories_id')->references('id')->on('fiver_categories');
            $table->foreign('subcategories_id')->references('id')->on('fiver_subcategories');
            $table->foreign('service_id')->references('id')->on('fiver_servicetypes');
            $table->foreign('gigmetadata_id')->references('id')->on('fiver_gig_metadatas');
            $table->foreign('searchtag_id')->references('id')->on('fiver_searchtags')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('fiver_gigs');
    }

}
