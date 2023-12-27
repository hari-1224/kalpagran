<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    use HasFactory;
    
    protected $table='m_dailyreport';

    protected $fillable = [
        'id',
        'date',
        'start_time',
        'end_time',
        'no_of_slabs',
        'slab_dimension',
        'running_time',
        'ideal_time',
        'breakdown_time',
        'powercut_time',
        'photo_upload'
        
    ];
}
