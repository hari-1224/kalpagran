<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockEntry extends Model
{
    use HasFactory;
    
    protected $table='m_block_entries';

    protected $fillable = [
        'id',
        'entry_time',
        'vehicle_no',
        'block_no',
        'block_size',
        'block_color',
        'block_weight',
        'quarry_name',
        'transport_name',
        'photo_upload',
        'exit_time'
        
    ];
}
