<?php

namespace App\Http\Controllers;

use App\tags;
use Illuminate\Http\Request;

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
}
