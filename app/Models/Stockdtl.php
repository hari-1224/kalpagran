<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;

class Stockdtl extends Model
{
    use HasFactory;
    protected $fillable = [
    'stockdtl_id',
    'stcredit',
    'stdebit',
    'stqty',
    'stprice',
    'ststatus',
    'stavatar',
    'stremark'
    ];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
