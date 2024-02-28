<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajax extends Model
{
    use HasFactory;
    protected $table = 'ajax_crud';

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'status',
        'cities',
        'age',
        'textarea',
        'color'
    ];


}
