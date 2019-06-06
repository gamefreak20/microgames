<?php

namespace App\Http\Controllers;

use App\gamePages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberGameController extends Controller
{
    public function index()
    {
        $games = gamePages::orderBy('created_at')->get();
        return view('games.index', compact('games'));
    }

    public function search($name)
    {
        $games = gamePages::where('name', $name)->get();
        if (count($games) > 1) {
            return view('games.index', compact('games'));
        } else {
            return view('games.detail', compact('games'));
        }
    }

    public function searchBar(Request $request)
    {
        return $this->search($request->name);
    }

    public function detail($id, $name)
    {
        $game = gamePages::findOrFail($id);
        return view('games.detail', compact('game'));
    }

    public function play($id, $name)
    {
        return view('games.play');
    }
}
