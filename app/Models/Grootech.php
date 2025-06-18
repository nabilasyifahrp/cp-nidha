<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grootech extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',  // contoh field
        'description', // contoh field
        'price',  // contoh field
    ];
}

