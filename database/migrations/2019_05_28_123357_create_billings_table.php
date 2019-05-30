<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->string('doctor_charge');
            $table->string('medicine_charge');
            $table->string('room_charge');
            $table->integer('num_of_days')->unsigned();
            $table->string('nursing_charge');
            $table->string('lab_charge');
            $table->string('advance');
            $table->string('bill');


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
        Schema::dropIfExists('billings');
    }
}
