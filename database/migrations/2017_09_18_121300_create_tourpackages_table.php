<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourpackages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tourname'); //title
            $table->string('location');
            $table->longtext('detail');
            $table->float('amount', 8, 2);
            $table->integer('schedules_id')->unsigned();
             $table->foreign('schedules_id')->references('id')->on('schedules');
            $table->timestamps();
        });
        //guildx
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourpackages');
    }
}
