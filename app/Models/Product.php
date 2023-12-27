<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QCutting;
use App\Models\Qpayment;
use App\Models\Customer;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'start',
        'name',
        'city_id',
        'material',
        'address',
        'phone',
        'email',
        'year',
        'remark',       
        'gst',
        'credit',
        'debit',
        'avatar',
        'avatar2',
        'avatar3',
        'avatar4',
        'avatar5'

    ];


    public function city(){
        return $this->belongsTo(city::class, 'city_id','id');
    }

    public function qcutting(){
        return $this->hasOne(QCutting::class);
    }

    
}