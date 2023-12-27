<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('emp_id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('doj')->nullable();
            $table->string('address')->nullable();
            $table->string('photo')->nullable();
            $table->string('password');
            $table->integer('role');
            $table->integer('dashboard')->nullable();
            $table->integer('employee')->nullable();
            $table->integer('production')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('customer')->nullable();
            $table->integer('quarry')->nullable();
            $table->integer('purchase')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
