<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoughblocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roughblocks', function (Blueprint $table) {
            $table->id();
            $table->string('block_id');
            $table->string('length');
            $table->string('breadth');
            $table->string('height');
            $table->string('price')->nullable();
            $table->string('supplier')->nullable();
            $table->string('supplier_id')->nullable();
            $table->string('color')->nullable();
            $table->string('marker')->nullable();
            $table->string('cbm')->nullable();
            $table->string('remark')->nullable();
            $table->string('qsgst')->nullable();
            $table->string('avatar')->nullable();
            
/**
 *Block Dressing
 *  */      $table->string('blockdressing')->nullable();
            
            $table->string('bd_length')->nullable();
            $table->string('bd_breadth')->nullable();
            $table->string('bd_height')->nullable();
            $table->string('bd_cbm')->nullable();
            $table->string('bd_remark')->nullable();
            $table->string('bd_avatar')->nullable();
/**
 *Block Cutting
 *  */         $table->string('blockcutting')->nullable();  

$table->string('bc_length')->nullable();
$table->string('bc_breadth')->nullable();
            $table->string('bc_machine')->nullable();
            $table->string('bc_slabscount')->nullable();
            $table->string('bc_sqft')->nullable();
            $table->string('bc_remark')->nullable();
            $table->string('bc_avatar')->nullable();


            /**
 *Block Polish
 *  */         $table->string('grinding')->nullable();  
                 $table->string('epoxy')->nullable();
                $table->string('polish')->nullable();
            $table->string('bp_gremark')->nullable();
            $table->string('bp_eremark')->nullable();
            $table->string('bp_premark')->nullable();
            $table->string('bp_avatar')->nullable();

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
        Schema::dropIfExists('roughblocks');
    }
}
