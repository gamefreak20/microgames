<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatorGameController extends Controller
{
    public function create()
    {
        return view('creator.game.create');
    }

    public function createLayout($id, $name)
    {
        return view('creator.game.createLayout');
    }

}
