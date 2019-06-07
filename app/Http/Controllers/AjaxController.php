<?php

namespace MicroGames\Http\Controllers;

use MicroGames\tags;
use MicroGames\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function tags($name)
    {
        $tags = tags::where('name', 'LIKE', '%'.$name.'%')->get();
        return json_encode($tags);
    }

    public function tag($id)
    {
        $tag = tags::findOrFail($id);
        return json_encode($tag);
    }

    public function users($name)
    {
        $user = User::where('name', 'LIKE', '%'.$name.'%')->get();
        return json_encode($user);
    }

    public function randomNumber()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 50; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        session(['randomString' => $randomString]);

        return $randomString;
    }

    public function getExp(Request $request)
    {
        if (Auth::check()) {
            if ($request->empty) {
                session(['time' => time()]);
            } else {
                if ($request->number === session('randomString')) {
                    if (session('time') == "") {
                        session(['time' => time()]);
                    } else {
                        if (time() - (int)session('time') >= 300) {
                            session(['time' => time()]);
                            $user = User::findOrFail(Auth::user()->id);
                            $currentExp = $user->exp;
                            $currentLevel = (int)$user->level;
                            $neededExp = 150 * $currentLevel * $currentLevel/3;

                            if ($currentExp >= $neededExp) {
                                $currentLevel++;
                                $currentExp = 0;
                            }

                            $user->update(['exp' => (int)$currentExp+50, 'level' => $currentLevel]);
                            return json_encode(['currentExp' => (int)$currentExp+50 , 'level' => $currentLevel, 'neededExp' => $neededExp]);
                        }
                    }
                }
            }
        }
    }
}
