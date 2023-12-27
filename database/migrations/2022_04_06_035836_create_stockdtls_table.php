<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockdtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockdtls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stockdtl_id')->nullable();
            $table->string('stcredit')->nullable();
            $table->string('stdebit')->nullable();
            $table->string('stqty')->nullable();
            $table->string('stprice')->nullable();
            $table->integer('ststatus')->nullable();
            $table->string('stavatar')->nullable();
            $table->string('stremark')->nullable();
            $table->timestamps();
            $table->foreign('stockdtl_id')->references('id')->on('stocks')

            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stockdtls');
    }
}
