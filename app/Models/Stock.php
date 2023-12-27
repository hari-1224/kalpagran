<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stockdtl;
class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'stock_id',
        'name',
        'description',
        'price',
        'quantity',
        'remark',
        'category',
        'avatar',
    ];

    public function stockdtls(){
        return $this->hasMany(Stockdtl::class);
    }
}

