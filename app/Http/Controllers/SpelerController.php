<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpelerController extends Controller
{
    public function index()
    {
        return view('spelers.index');
    }
}
