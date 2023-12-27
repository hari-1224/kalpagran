<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finished extends Model
{
    use HasFactory;
    
    protected $table='m_finished';

    protected $fillable = [
        'id',
        'date',
        'slab_color',
        'slab_no',
        'block_no',
        'measurement',
        'slab_dimension'
     
        
    ];
}
