<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan semua data contacts
    public function index()
    {
        $contacts = Contact::all();  // Mengambil semua data kontak
        return view('contacts.index', compact('contacts'));  // Mengirim data ke view
    }

    // Menampilkan form untuk menambah data
    public function create()
    {
        return view('contacts.create');  // Menampilkan form untuk tambah kontak
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        // Validasi inputan dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string',
            'message' => 'required|string',
        ]);

        // Menyimpan data kontak ke database
        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        // Mengambil data kontak berdasarkan ID
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));  // Mengirim data ke form edit
    }
    public function update(Request $request)
    {
        // Validasi data
        $request->validate([
            'id' => 'required|exists:contacts,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'company' => 'nullable|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string',
            'message' => 'nullable|string|max:1000',
        ]);

        // Cari dan perbarui data
        $contact = Contact::findOrFail($request->id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->company = $request->company;
        $contact->date = $request->date;
        $contact->time = $request->time;
        $contact->message = $request->message;
        $contact->save();

        // Kembalikan respon ke view
        return redirect()->back()->with('success', 'Contact updated successfully!');
    }

    // Menghapus data
    public function destroy($id)
    {
        // Mencari dan menghapus data kontak berdasarkan ID
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Data berhasil dihapus!');
    }

    // Menyimpan data kontak secara massal
    public function storeMultiple(Request $request)
    {
        // Validasi inputan dari form massal
        $validatedData = $request->validate([
            'name' => 'required|array',
            'name.*' => 'required|string|max:255',
            'email' => 'required|array',
            'email.*' => 'required|email|max:255',
            'phone' => 'required|array',
            'phone.*' => 'required|string|max:255',
            'company' => 'required|array',
            'company.*' => 'required|string|max:255',
            'date' => 'required|array',
            'date.*' => 'required|date',
            'time' => 'required|array',
            'time.*' => 'required|string',
            'message' => 'required|array',
            'message.*' => 'required|string',
        ]);

        // Menyimpan data kontak secara massal
        foreach ($request->name as $index => $name) {
            Contact::create([
                'name' => $name,
                'email' => $request->email[$index],
                'phone' => $request->phone[$index],
                'company' => $request->company[$index],
                'date' => $request->date[$index],
                'time' => $request->time[$index],
                'message' => $request->message[$index],
            ]);
        }

        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil disimpan!');
    }
}