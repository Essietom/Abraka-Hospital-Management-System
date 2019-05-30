<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_patient', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('billing_id')->unsigned();
            $table->integer('patient_id')->unsigned();

            $table->foreign('billing_id')->references('id')->on('billings');
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
        Schema::dropIfExists('billing_patient');
    }
}
