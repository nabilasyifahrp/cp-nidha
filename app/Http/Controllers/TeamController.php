<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::latest()->get();
        return view('admin.teams.index', compact('teams'));
    }


    public function create(){
        return view('admin.teams.create');
    }


    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:225',
            'position' => 'required|string'
        ]);

        Team::create($validate);
        return redirect()->route('team.index')->with('success', 'Team successfully added.');
    }


    public function edit($id){
        $team = Team::findOrFail($id);
        return view('admin.teams.edit', compact('team'));
    }


    public function update(Request $request, $id){
        $team = Team::findOrFail($id);

        $validate = $request->validate([
            'name' => 'required|string|max:225',
            'position' => 'required|string'
        ]);

        $team->update($validate);

        return redirect()->route('team.edit', $team->id)->with('success', 'Team successfully updated');

    }


    public function destroy($id){
        $team = Team::findOrFail($id);

        $team->delete();

        return redirect()->route('team.index')->with('success', 'The team has been successfully deleted');
    }
}
