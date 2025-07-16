<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvantageController extends Controller
{
    public function index()
    {
        $advantages = Advantage::latest()->get();
        return view('admin.advantages.index', compact('advantages'));
    }

    public function create()
    {
        return view('admin.advantages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Advantage::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('advantages.index')->with('success', 'Advantage berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $advantage = Advantage::findOrFail($id);
        return view('admin.advantages.edit', compact('advantage'));
    }

    public function update(Request $request, $id)
    {
        $advantage = Advantage::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        $advantage->update($data);

        return redirect()->route('advantages.index')->with('success', 'Advantage berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $advantage = Advantage::findOrFail($id);

        $advantage->delete();

        return redirect()->route('advantages.index')->with('success', 'Advantage berhasil dihapus.');
    }

    public function read($id)
    {
        $advantage = Advantage::findOrFail($id);
        return view('admin.advantages.detail', compact('advantage'));
    }
}
