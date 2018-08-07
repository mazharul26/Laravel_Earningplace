<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiverSearchtagDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiver_searchtag_details', function (Blueprint $table) {
           
            $table->unsignedInteger('gigs_id');
            $table->unsignedInteger('searchtag');
            $table->foreign('gigs_id')->references('id')->on('fiver_gigs');
            $table->foreign('searchtag')->references('id')->on('fiver_searchtags');
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
        Schema::dropIfExists('fiver_searchtag_details');
    }
}
