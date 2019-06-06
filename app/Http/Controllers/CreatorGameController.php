<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Sluggable;

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
        //
    }

}
