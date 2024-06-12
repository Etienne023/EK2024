<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::all();
        $teams = Team::all();

        return view('players.index', compact('players', 'teams'));
    }

    public function create()
    {
        $teams = Team::all();

        return view('players.create', ['teams' => $teams]);
    }

    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'infix' => 'nullable',
            'surname' => 'required',
            'jerseynumber' => 'required|numeric',
            'position' => 'required',
            'crest' => 'required|image',
            'team_id' => 'required|exists:teams,id',
        ]);


        Player::create($data);

        return redirect()->route('players');
    }

    public function edit(Player $player)
    {
        $teams = Team::all();

        return view('players.edit', ['player' => $player], ['teams' => $teams]);
    }

    public function update(Request $request, Player $player)
    {
        $validated = $request->validate([
            'firstname' => 'required|max:255',
            'infix' => 'nullable|max:255',
            'surname' => 'required|max:255',
            'jerseynumber' => 'required|numeric',
            'position' => 'required|max:255',
            'crest' => 'nullable|image',
            'team_id' => 'required|exists:teams,id',
        ]);

        $player->update($validated);

        return redirect()->route('players', $player);
    }

    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('players');
    }
}
