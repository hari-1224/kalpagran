<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Qcutting;
class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'name',
        'gst',
        'city',
        'address',
        'phone',
        'email',
        'credit',
        'debit',       
        'avatar'

    ];

    public function qcutting(){
        return $this->hasOne(QCutting::class );
    }

}
