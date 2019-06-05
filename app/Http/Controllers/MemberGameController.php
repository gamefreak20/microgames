<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberGameController extends Controller
{
    public function index()
    {
        return view('member.games.index');
    }

    public function detail()
    {
        return view('member.games.detail');
    }

    public function play()
    {
        return view('member.games.play');
    }
}
