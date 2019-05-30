<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientVhiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_vhi', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('vhis_id')->unsigned();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('vhis_id')->references('id')->on('vhis');
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
        Schema::dropIfExists('patient_vhi');
    }
}
