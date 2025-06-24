<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Training;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $trainings = Training::latest()->take(3)->get(); 
        $adventages = Advantage::latest()->take(3)->get();
        return view('layouts.app', compact('trainings', 'adventages')); 
    }
}