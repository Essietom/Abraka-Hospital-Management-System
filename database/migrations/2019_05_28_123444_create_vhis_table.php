<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVhisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vhis', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('temperature');
            $table->string('pulse_rate');
            $table->string('blood_pressure');
            $table->string('respiration_rate');

            $table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('vhis');
    }
}
