<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Jika nama tabel berbeda dari bentuk jamak model, definisikan nama tabel
    protected $table = 'appointments';

    // Definisikan kolom yang dapat diisi
    protected $fillable = ['name', 'email', 'phone', 'date', 'time', 'message'];
}

