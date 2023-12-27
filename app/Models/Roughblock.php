<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roughblock extends Model
{
    use HasFactory;
    protected $fillable = [
        'block_id',
        'length',
        'breadth',
        'height',
        'price',
        'supplier',
        'color',
        'marker',
        'cbm',       
        'remark',
        'avatar',
'qsgst',
'blockdressing',
'bd_length',
'bd_breadth',
'bd_height',
'bd_cbm',
'bd_remark',
'bd_avatar',
'blockcutting',
'bc_length',
'bc_breadth',
'bc_machine',
'bc_slabscount',
'bc_sqft',
'bc_remark',
'bc_avatar',

'grinding',
'epoxy',
'polish',
'bp_gremark',
'bp_eremark',
'bp_premark',
'bp_avatar',

    ];
}
