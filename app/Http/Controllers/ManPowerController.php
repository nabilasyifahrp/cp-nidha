<?php
namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Http\Request;

class ManPowerController extends Controller
{
    public function index()
    {
        
        $advantages = Advantage::all();

        
        return view('manpower.index', compact('advantages'));
    }
}
