<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainings = Training::latest()->get();
        return view('admin.trainings.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.trainings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imagePath = $request->file('image')->store('trainings', 'public');

        Training::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath
        ]);

        return redirect()->route('trainings.index')->with('success', 'Training added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function read($id)
    {
        $training = Training::findOrFail($id);
        return view('admin.trainings.detail', compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $training = Training::findOrFail($id);
        return view('admin.trainings.edit', compact('training'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $training = Training::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            if ($training->image && Storage::disk('public')->exists($training->image)) {
                Storage::disk('public')->delete($training->image);
            }

            $data['image'] = $request->file('image')->store('trainings', 'public');
        }

        $training->update($data);

        return redirect()->route('trainings.index')->with('success', 'Training updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $training = Training::findOrFail($id);

        if ($training->image && Storage::disk('public')->exists($training->image)) {
            Storage::disk('public')->delete($training->image);
        }

        $training->delete();

        return redirect()->route('trainings.index')->with('success', 'Training successfully deleted.');
    }
}
