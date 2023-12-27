<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polishing extends Model
{
    use HasFactory;
    
    protected $table='m_polishing';

    protected $fillable = [
        'id',
        'date',
        'grind_polish',
        'starting_time',
        'ending_time',
        'block_no',
        'no_of_slabs',
        'remarks',
        'operator_name',
        'slab_dimension',
        'block_color',
        'running_time',
        'ideal_time',
        'breakdown_time',
        'powercut_time',
        'photo_upload'
        
    ];
}