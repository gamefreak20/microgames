<?php

namespace MicroGames\Http\Controllers;

use MicroGames\gameObject;
use MicroGames\gamePages;
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
        $pages = gameObject::where('game_pages_id', $id)->orderBy('order_number', 'asc')->get();
        return view('games.detail', compact('pages', 'id', 'name'));
    }

    public function play($id, $name)
    {
        return redirect('games/'.$id.'/index.html');
//        return view('games.play', compact('id'));
    }
}
