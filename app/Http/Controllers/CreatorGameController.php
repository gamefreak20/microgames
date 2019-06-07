<?php

namespace MicroGames\Http\Controllers;

use MicroGames\gameObject;
use MicroGames\gamePages;
use Chumper\Zipper\Facades\Zipper;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

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

        $Path = public_path("games\\".$game['id'].".".request()->game->getClientOriginalExtension());

        $za = new ZipArchive();

        $za->open($Path);

        $name =  explode('/', $za->statIndex(0)['name'])[0];

        \Zipper::make($Path)->extractTo('games');

        rename(public_path('games')."\\".$name, public_path("games\\".$game['id']));

        return var_dump($input);
    }

}
