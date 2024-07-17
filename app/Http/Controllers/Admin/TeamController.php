<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.team_index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.team_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        Team::create($request->all());

        return redirect()->route('team.index')->with('success', 'Team member created successfully.');
    }

    public function edit(Team $team)
    {
        return view('admin.teams.team_edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'image' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        $team->update($request->all());

        return redirect()->route('team.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('team.index')->with('success', 'Team member deleted successfully.');
    }
}
