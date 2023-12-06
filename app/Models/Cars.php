<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
protected $fillable=[
    'name',
    'model',
    'price',
    'is_active'

    ];
protected $table = 'cars';
}
