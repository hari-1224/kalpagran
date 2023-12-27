<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qpayments', function (Blueprint $table) {
            $table->id();
            $table->string('qpayment_id');
            $table->string('pqblock_id');
            $table->string('pqcustomer_id');
            $table->integer('paid');
            $table->string('total');
            $table->string('balance');
            $table->string('lorry');
            $table->string('permit');
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
        Schema::dropIfExists('qpayments');
    }
}
