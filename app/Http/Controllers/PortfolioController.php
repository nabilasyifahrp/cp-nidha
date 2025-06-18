<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(){
        $projects = Product::where('type', 'projects')->get();
        return view('admin.portfolios.index', compact('projects'));
    }

    public function create(){
        return view('admin.portfolios.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'title' => 'required|string|max:225',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:enable,disable'
        ]);

        $validate['type'] = 'projects';
        $validate['status'] = $request->status === 'enable';

        if($request->hasFile('image')){
            $validate['image'] = $request->file('image')->store('images', 'public');
        }

        Product::create($validate);
        return redirect()->route('portfolio.index')->with('success', 'Project successfully added.');
    }


    public function edit($id){
        $project = Product::where('type', 'projects')->findOrFail($id);
        return view('admin.portfolios.edit', compact('project'));
    }


    public function update(Request $request, $id){
        $project = Product::where('type', 'projects')->findOrFail($id);

        $validate = $request->validate([
            'title' => 'required|string|max:225',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:enable,disable'
        ]);

        $validate['status'] = $request->status === 'enable';

        if ($request->hasFile('image')) {
            if ($project->image && Storage::exists('public/' . $project->image)) {
                Storage::delete('public/' . $project->image);
            }

            $validate['image'] = $request->file('image')->store('images', 'public');
        }

        $project->update($validate);

        return redirect()->route('portfolio.edit', $project->id)->with('success', 'Project successfully updated');
    }


    public function read($id){
        $project = Product::where('type', 'projects')->findOrFail($id);
        return view('admin.portfolios.read', compact('project'));
    }


    public function destroy($id){
        $project = Product::where('type', 'projects')->findOrFail($id);

        if ($project->image && Storage::exists('public/' . $project->image)) {
            Storage::delete('public/' . $project->image);
        }

        $project->delete();

        return redirect()->route('portfolio.index')->with('success', 'The project has been successfully deleted');
    }

}
