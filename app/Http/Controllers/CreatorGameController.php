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

    public function createLayout($id)
    {
        return view('creator.game.createLayout', compact('id'));
    }

    public function storeLayout(Request $request)
    {
        $whatIsRequested = explode(',', $request->totalDivs);
        array_shift($whatIsRequested);
        $testArray = array();
        $i = 0;
        $gameId = $request->gameId;

        foreach ($whatIsRequested as $element) {
            $i++;
            if (strpos($element, 'title') === 0) {
                $name = 'title'.$i;
                gameObject::create(['game_pages_id' => $gameId, 'order_number' => $i, 'kind' => 'title', 'what' => $request->$name]);
            } elseif (strpos($element, 'file') === 0) {
                $name = 'file'.$i;
                request()->validate([
                    $name => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]);
                request()->$name->move(public_path('images/games/page'), $gameId.".".$i.".".request()->$name->getClientOriginalExtension());
                gameObject::create(['game_pages_id' => $gameId, 'order_number' => $i, 'kind' => 'file', 'what' => $gameId.".".$i.".".request()->$name->getClientOriginalExtension()]);
            } elseif (strpos($element, 'text') === 0) {
                $name = 'text'.$i;
                gameObject::create(['game_pages_id' => $gameId, 'order_number' => $i, 'kind' => 'text', 'what' => $request->$name]);
            }
        }

        return redirect(route('gameDetail', [$gameId, 'game']));
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
            'mainPicture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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

        return redirect(route('game'));
    }

}
