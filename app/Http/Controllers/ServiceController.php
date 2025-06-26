<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }


    public function create(){
        return view('admin.services.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('service', 'public');
        }

        Service::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'image'         => $imagePath,
        ]);

        return redirect()->route('service.index')->with('success', 'Service successfully added.');
    }


    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }


    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $data = [
            'title'         => $request->title,
            'description'   => $request->description,
        ];

        if ($request->hasFile('image')) {
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
            $data['image'] = $request->file('image')->store('advantages', 'public');
        }

        $service->update($data);

        return redirect()->route('service.index')->with('success', 'Service successfully added.');
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('service.index')->with('success', 'Service successfully deleted.');
    }


    public function read($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.detail', compact('service'));
    }
}
