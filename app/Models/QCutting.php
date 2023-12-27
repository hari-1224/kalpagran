<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quarry;
use App\Models\Qpayments;
use App\Models\Customer;

class QCutting extends Model
{
    use HasFactory;
    protected $fillable = [
        'qblock_id',
            'length',
            'breadth',
            'height',
            'price',
            'quarry_id',
            'color',
            'cbm',
            'remark',
            'avatar',
            'payment_id',
            
/**
 *Block Marking
 *  */      'blockmarking',
 'bm_date',
 'marker',
            'bm_length',
            'bm_breadth',
            'bm_height',
            'bm_cbm',
            'bm_remark',
            'bm_avatar',
/**
 *Block Dressing
 *  */         'blockdressing',  
 'bd_date',
 'bd_length',
 'bd_breadth',
 'bd_height',
 'bd_cbm',
 'bd_remark',
 'bd_avatar',


            /**
 *Block Invoice
 *  */         
'in_date',
 'invoice',  
                 'document',
                 'customer_id',
             
            /**
 *Block Loading
 *  */  
'weight',
'lorry',
'permit',
    ];

    public function quarry(){
        return $this->belongsTo(Quarry::class);
    }


    public function qpayment(){
        return $this->belongsTo(Qpayments::class);
    }

 
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
