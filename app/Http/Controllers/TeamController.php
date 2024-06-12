<?php

namespace App\Http\Controllers;

use App\Models\Poule;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all(); 
        $poules = Poule::all();

        return view('teams.index', ['teams' => $teams, 'poules' => $poules]);
    }

    public function create()
    {
        $poules = Poule::all();

        return view('teams.create', ['poules' => $poules]);
    }


    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'tla' => 'required',
            'crest' => 'required|image',
            'website' => 'required|url',
            'pool_id' => 'required|exists:poules,id',
        ]);

        if ($request->hasFile('crest')) {
            $data['crest'] = $request->file('crest')->store('crests');
        }

        Team::create($data);

        return redirect()->route('teams.index');
    }
    


    public function show(Team $team)
    {
        return view('teams.show', ['team' => $team]);
    }

}
