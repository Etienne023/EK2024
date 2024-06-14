<?php

namespace App\Http\Controllers;

use App\Models\News_item;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function index()
    {
        $NewsItems = News_item::latest()->take(3)->get();
        $teams = Team::where('pool_id', 1)->get();
        $players = Player::where('team_id', 1)->get();
        
        return view('dashboard', compact('NewsItems', 'teams', 'players'));
    }
}
