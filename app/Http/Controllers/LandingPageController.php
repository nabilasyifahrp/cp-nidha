<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Partner;
use App\Models\Team;
use App\Models\Training;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $trainings = Training::latest()->take(3)->get(); 
        $advantages = Advantage::latest()->take(3)->get();
        $teams = Team::latest()->get();
        $partners = Partner::latest()->take(5)->get();
        return view('layouts.app', compact('trainings', 'advantages', 'teams', 'partners')); 
    }

}