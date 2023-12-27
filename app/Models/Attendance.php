<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
protected $table='attadence';
    protected $fillable = [
        'emp_id',
        'attadence_status',
        'date',
        'created_by',
    ];
}