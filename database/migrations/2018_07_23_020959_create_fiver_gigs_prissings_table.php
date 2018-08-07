<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiverGigsPrissingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiver_gigs_prissings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('basic_title', 50);
            $table->unsignedInteger('delivery_id');
            $table->unsignedInteger('revision_id');
            $table->string('number_pages', 20);
            $table->string('picture', 20);
            $table->string('transcription', 20);
            $table->string('designcustomization', 40);
            $table->string('contentupload', 40);
            $table->string('product_number', 40);
            $table->float('price', 5,2);
            $table->foreign('delivery_id')->references('id')->on('fiver_delivery_durations');
            $table->foreign('revision_id')->references('id')->on('fiver_revisions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiver_gigs_prissings');
    }
}
