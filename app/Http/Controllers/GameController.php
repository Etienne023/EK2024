<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();


        return view('games.index', ['games' => $games]);
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }
    public function update(Request $request, Game $game)
    {
        $game->scoreHomefulltime = $request->scoreHomefulltime;
        $game->scoreAwayfulltime = $request->scoreAwayfulltime;

        $game->save();

        return redirect()->route('games.index');
    }
}
