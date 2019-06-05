<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberGameController extends Controller
{
    public function index()
    {
        return view('games.index');
    }

    public function detail($id, $name = null)
    {
        if ($name = null) {
            //search for game with name = $id
            //if more exists to go search page with the name = $id
        } else {
            //run the game with id = $id
        }
        return view('games.detail');
    }

    public function play($id, $name)
    {
        return view('games.play');
    }
}
