<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get(); 

        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create(){
        return view ('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'testi' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('testimonials', 'public');
        }

        Testimonial::create($data);
        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil ditambahkan!');
    }

    public function edit($id)
{
    $testimonial = Testimonial::findOrFail($id);
    return view('admin.testimonials.edit', compact('testimonial'));
}


    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'name' => 'required',
            'testi' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            $data['image'] = $request->file('image')->store('testimonials', 'public');
        }

        $testimonial->update($data);
        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil diupdate!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            Storage::disk('public')->delete($testimonial->image);
        }

        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil dihapus!');
    }

}
