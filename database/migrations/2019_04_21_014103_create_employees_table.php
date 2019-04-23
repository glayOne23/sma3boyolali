<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nip')->nullable();
            $table->string('photo')->nullable();
            $table->date('birthday')->nullable();
            $table->timestamps();

            // foregn key employee_categories
            $table->unsignedBigInteger('employee_category_id')->nullable();
            $table->foreign('employee_category_id')->references('id')->on('employee_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
