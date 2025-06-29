<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentRequest extends Model
{
    // use HasFactory;
    protected $fillable=[
        'name',
        'phone',
        'date',
        'email',
        'company',
        'time',
        'message'
    ];
}
