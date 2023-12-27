<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quarry;
use App\Models\Product;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_name',
        'pincode',
    ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}

