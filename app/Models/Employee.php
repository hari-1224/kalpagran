<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_id',
        'name',
        'email',
        'phone',
        'doj',
        'address',
        'photo',
        'password',
        'role',
        'dashboard',
        'employee',
        'production',
        'stock',
        'customer',
        'quarry',
        'purchase'    

    ];
}
