<?php
namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Http\Request;

class ManPowerController extends Controller
{
    public function index()
    {
        // Ambil semua data advantages
        $advantages = Advantage::all();

        // Kirim ke view manpower/index.blade.php
        return view('manpower.index', compact('advantages'));
    }
}
