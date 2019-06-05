<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameMemberController extends Controller
{
    public function index()
    {
        return view('member.games.index');
    }
}
