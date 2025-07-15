<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class IotPageController extends Controller
{
    public function index(){
        $services = Service::latest()->take(3)->get();
        $teams = Team::latest()->take(5)->get();
        return view('layouts.app-iot', compact('services', 'teams'));
    }
}
