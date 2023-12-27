<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQCuttingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('q_cuttings', function (Blueprint $table) {
            $table->id();
            $table->string('qblock_id');
            $table->string('length');
            $table->string('breadth');
            $table->string('height');
            $table->string('price')->nullable();
            $table->unsignedBigInteger('quarry_id')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->string('color')->nullable();
            $table->string('cbm')->nullable();
            $table->string('remark')->nullable();
            $table->string('avatar')->nullable();
            
            
/**
 *Block Marking
 *  */      $table->string('blockmarking')->nullable();
 $table->string('bm_date')->nullable();
 $table->string('marker')->nullable();
            $table->string('bm_length')->nullable();
            $table->string('bm_breadth')->nullable();
            $table->string('bm_height')->nullable();
            $table->string('bm_cbm')->nullable();
            $table->string('bm_remark')->nullable();
            $table->string('bm_avatar')->nullable();
/**
 *Block Dressing
 *  */         $table->string('blockdressing')->nullable();  
 $table->string('bd_date')->nullable();
 $table->string('bd_length')->nullable();
 $table->string('bd_breadth')->nullable();
 $table->string('bd_height')->nullable();
 $table->string('bd_cbm')->nullable();
 $table->string('bd_remark')->nullable();
 $table->string('bd_avatar')->nullable();


            /**
 *Block Invoice
 *  */        $table->string('in_date')->nullable();
 $table->string('invoice')->nullable();  
                 $table->string('document')->nullable();
                 
                 $table->unsignedBigInteger('customer_id')->nullable();
             
            /**
 *Block Loading
 *  */  
$table->string('weight')->nullable();
$table->string('lorry')->nullable();
$table->string('permit')->nullable();

            $table->timestamps();
            $table->foreign('quarry_id')->references('id')->on('quarries')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            // $table->foreign('payment_id')->references('id')->on('qpayments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('q_cuttings');
    }
}
