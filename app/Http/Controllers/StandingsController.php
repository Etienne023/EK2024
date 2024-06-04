<?php

namespace App\Http\Controllers;

use App\Models\Standings;
use Illuminate\Http\Request;

class StandingsController extends Controller
{
    //

    public function index(){
        
        $standings = Standings::all();
        return view('standings.index', ['standings' => $standings]);
    }
}
