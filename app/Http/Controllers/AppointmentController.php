<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Session::get('appointments', []); // Ambil data appointment dari session
        return view('appointments.index', compact('appointments'));
        
    }

    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'company' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'time' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // Ambil data appointments dari session atau buat array baru
        $appointments = Session::get('appointments', []);
        $appointments[] = $request->only('name', 'email', 'phone', 'company', 'date', 'time', 'message');
        Session::put('appointments', $appointments);

        return redirect()->route('appointments.index')->with('status', 'Appointment berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $appointments = Session::get('appointments', []);
        
        // Pastikan ID valid
        if (!isset($appointments[$id])) {
            return redirect()->route('appointments.index')->withErrors('Data appointment tidak ditemukan!');
        }

        $appointment = $appointments[$id];
        return view('appointments.edit', compact('appointment', 'id'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'company' => 'nullable|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string',
            'message' => 'required|string',
        ]);

        // Ambil data appointments dari session
        $appointments = Session::get('appointments', []);
        
        // Pastikan ID valid
        if (!isset($appointments[$id])) {
            return redirect()->route('appointments.index')->withErrors('Data appointment tidak ditemukan!');
        }

        // Update data appointment pada ID yang diberikan
        $appointments[$id] = $request->only('name', 'email', 'phone', 'company', 'date', 'time', 'message');
        Session::put('appointments', $appointments);

        return redirect()->route('appointments.index')->with('status', 'Appointment berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $appointments = Session::get('appointments', []);
        
        // Pastikan ID valid
        if (!isset($appointments[$id])) {
            return redirect()->route('appointments.index')->withErrors('Data appointment tidak ditemukan!');
        }

        unset($appointments[$id]);
        Session::put('appointments', array_values($appointments)); // Reindex array

        return redirect()->route('appointments.index')->with('status', 'Appointment berhasil dihapus!');
    }

    public function showForm()
    {
        return view('appointments.create'); // Pastikan ini sesuai dengan nama file view yang Anda buat untuk formulir
    }

    public function send(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'company' => 'nullable|string|max:255',
        'date' => 'required|date',
        'time' => 'required|string',
        'message' => 'required|string',
    ]);

    // Contoh logika penyimpanan data atau pengiriman
    // Anda bisa mengubahnya sesuai kebutuhan
    // Redirect dengan pesan sukses
    return redirect()->route('appointments.index')->with('status', 'Appointment berhasil dikirim!');
}
}