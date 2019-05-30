<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_staff', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('staff_id')->unsigned();

            $table->foreign('staff_id')->references('id')->on('staffs');
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
        Schema::dropIfExists('patient_staff');
    }
}
