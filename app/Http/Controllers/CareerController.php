<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('cp-grootech.careers'); // Sesuaikan dengan path view Anda
    }
}
