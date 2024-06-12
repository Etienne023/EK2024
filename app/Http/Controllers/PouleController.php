<?php

namespace App\Http\Controllers;

use App\Models\Poule;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class PouleController extends Controller
{

    public function index()
    {

        $poules = Poule::all();
        $user = User::all();
        $teams = Team::all();

        return view('poule.index', compact('poules', 'user', 'teams'));
    }

    public function create()
    {
        return view('poule.create');
    }


    public function store(Request $request)
    {

        if (auth()->user()->role != 'owner') {
            return redirect()->route('poule')->withErrors('Only owners can add a poule.');
        }

        $data = $request->validate([
            'name' => 'required',
            'crest' => 'required|image',
            'user_id' => 'required',
        ]);

        if ($request->hasFile('crest')) {
            $data['crest'] = $request->file('crest')->store('crests');
        }

        $data['user_id'] = auth()->id();

        Poule::create($data);

        return redirect()->route('poule');
    }

    public function destroy(Poule $poule)
    {
        $poule->delete();

        return redirect()->route('poule');
    }

    public function edit(Poule $poule)
    {
        return view('poule.edit', compact('poule'));
    }

    public function update(Request $request, Poule $poule)
    {
        $data = $request->validate([
            'name' => 'required',
            'crest' => 'image',
        ]);

        if ($request->hasFile('crest')) {
            $data['crest'] = $request->file('crest')->store('crests');
        }

        $poule->update($data);

        return redirect()->route('poule');
    }
    
}
