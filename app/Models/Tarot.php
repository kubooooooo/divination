<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarot extends Model
{
    protected $fillable = [
        'name',
        'image',
        'comment',
    ];
}
