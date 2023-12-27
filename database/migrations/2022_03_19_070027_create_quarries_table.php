<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuarriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarries', function (Blueprint $table) {
            $table->id();
            $table->string('quarry_id');
            $table->string('start');
            $table->string('name');
            $table->unsignedBigInteger('city_id');
            $table->string('material');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('year')->nullable();
            $table->string('remark')->nullable();
            $table->string('gst')->nullable();
            $table->string('credit')->nullable();
            $table->string('debit')->nullable();
            $table->string('avatar')->nullable();
            $table->string('avatar2')->nullable();
            $table->string('avatar3')->nullable();
            $table->string('avatar4')->nullable();
            $table->string('avatar5')->nullable();
            $table->timestamps();


            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quarries');
    }
}
