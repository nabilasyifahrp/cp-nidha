<?php
namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Http\Request;

class ManPowerController extends Controller
{
    public function index()
{
    $advantages = Advantage::latest()->take(3)->get(); 
    return view('layouts.app-manpower', compact('advantages'));
}
}
