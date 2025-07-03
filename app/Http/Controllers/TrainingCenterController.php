<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        $trainings = Training::latest()->take(5)->get();
        return view('layouts.app-training', compact('trainings'));
    }
}