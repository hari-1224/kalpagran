<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qpayments extends Model
{
    use HasFactory;

    protected $fillable = [
    
    'payment_id',
    'pqblock_id',
    'pqcustomer_id',
    'paid',
    'total',
    'balance',
    'lorry',
    'permit'
    ];

    public function qcutting(){
        return $this->hasOne(QCutting::class);
    }



}
