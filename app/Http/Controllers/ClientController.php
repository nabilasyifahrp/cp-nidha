<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::latest()->get();
        return view('admin.clients.index', compact('clients'));
    }

    public function create(){
        return view('admin.clients.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:225',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->hasFile('image')){
            $validate['image'] = $request->file('image')->store('images', 'public');
        }

        Client::create($validate);
        return redirect()->route('client.index')->with('success', 'Client successfully added.');
    }


    public function edit($id){
        $client = Client::findOrFail($id);
        return view('admin.clients.edit', compact('client'));
    }


    public function update(Request $request, $id){
        $client = Client::findOrFail($id);

        $validate = $request->validate([
            'name' => 'required|string|max:225',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($client->image && Storage::exists('public/' . $client->image)) {
                Storage::delete('images/clients/' . $client->image);
            }

            $validate['image'] = $request->file('image')->store('images', 'public');
        }

        $client->update($validate);

        return redirect()->route('client.edit', $client->id)->with('success', 'Client successfully updated');
    }


    public function read($id){
        $client = Client::findOrFail($id);
        return view('admin.clients.read', compact('client'));
    }


    public function destroy($id){
        $client = Client::findOrFail($id);

        if ($client->image && Storage::exists('public/' . $client->image)) {
            Storage::delete('public/' . $client->image);
        }

        $client->delete();

        return redirect()->route('client.index')->with('success', 'The client has been successfully deleted');
    }

}
