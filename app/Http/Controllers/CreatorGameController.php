<?php

namespace App\Http\Controllers;

use App\gameObject;
use App\gamePages;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Auth;

class CreatorGameController extends Controller
{
    use Sluggable;

    public function create()
    {
        return view('creator.game.create');
    }

    public function createLayout($id, $name)
    {
        return view('creator.game.createLayout');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'mainPicture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'game' => 'required',
        ]);

        $input = $request->validate([
            'title' => 'required|max:191',
            'selectedTags' => 'max:191',
        ]);

        $game = gamePages::create(['name' => $input['title'], 'user_id' => Auth::user()->id]);

        request()->mainPicture->move(public_path('images/games/main'), $game['id'].".".request()->mainPicture->getClientOriginalExtension());
        request()->game->move(public_path('games'), $game['id'].".".request()->game->getClientOriginalExtension());

        return var_dump($input);
    }

}
