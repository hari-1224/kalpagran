<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispatch extends Model
{
    use HasFactory;
    
    protected $table='m_dispatch';

    protected $fillable = [
        'id',
        'date',
        'customer_address',
        'invoice_no',
        'invoice_value',
        'gst_amount',
        'slab_color',
        'measurement',
        'photo_upload'
        
    ];
}
