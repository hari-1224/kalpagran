<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    protected $table='m_production';
    protected $fillable = [
        'id',
        'cutting_machine',
        'block_dimension',
        'block_no',
        'block_color',
        'loading_time',
        'unloading_time',
        'no_of_slabs',
        'remarks',
        'operator_name',
        'cutting_time',
        'ideal_time',
        'breakdown_time',
        'powercut_time'
       
        
    ];
}
