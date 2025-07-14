<?php 
namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'expertise' => 'required|string',
        ]);

        Team::create($request->all());
        return redirect()->route('team.index')->with('success', 'Team data added succesfully.');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'expertise' => 'required|string',
        ]);

        $team->update($request->all());
        return redirect()->route('team.index')->with('success', 'Data team succesfully updated.');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Data team has been succesfully deleted.');
    }
}
