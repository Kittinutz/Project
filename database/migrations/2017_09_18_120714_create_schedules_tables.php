<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('time1')->nullable();    
            $table->longText('description1')->nullable();
            $table->string('time2')->nullable();
            $table->longText('description2')->nullable();
            $table->string('time3')->nullable();
            $table->longText('description3')->nullable();
            $table->string('time4')->nullable();
            $table->longText('description4')->nullable();
            $table->string('time5')->nullable();
            $table->longText('description5')->nullable();
            $table->string('time6')->nullable();
            $table->longText('description6')->nullable();
            $table->string('time7')->nullable();
            $table->longText('description7')->nullable();
            $table->string('time8')->nullable();
            $table->longText('description8')->nullable();
            $table->string('time9')->nullable();
            $table->longText('description9')->nullable();
            $table->string('time10')->nullable();
            $table->longText('description10')->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
