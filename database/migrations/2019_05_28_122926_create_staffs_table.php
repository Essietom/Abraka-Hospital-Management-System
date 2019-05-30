<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('dob');
            $table->string('age');
            $table->string('designation');
            $table->string('bloodgroup');
            $table->string('sex');
            $table->integer('role_id')->unsigned()->default(2);
            $table->string('marital_status');
            $table->string('address');
            $table->string('phone_num');
            $table->string('email');
            $table->string('staff_no');
            $table->integer('department_id')->unsigned();

            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('department_id')->references('id')->on('departments');
            


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
        Schema::dropIfExists('staffs');
    }
}
