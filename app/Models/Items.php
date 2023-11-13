<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
protected $fillable = [
    'name',
'price',
    'year',
    'colour',
    'speed'
    ];
}
