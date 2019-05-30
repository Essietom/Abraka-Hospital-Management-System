<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentStaffTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('department_staff_tables', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->integer('staff_id')->unsigned();

            $table->foreign('staff_id')->references('id')->on('staffs');
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
        Schema::dropIfExists('department_staff_tables');
    }
}
