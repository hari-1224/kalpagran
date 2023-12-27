<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epoxy extends Model
{
    use HasFactory;
    
    protected $table='m_epoxy';

    protected $fillable = [
        'id',
        'date',
        'block_no',
        'no_of_slabs',
        'epoxy_make',
        'running_time',
        'consumption',
        'operator_name',
        'photo_upload'
        
    ];
}
