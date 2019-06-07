<?php

namespace MicroGames\Http\Controllers;

use Illuminate\Http\Request;

class MemberUsersController extends Controller
{
    public function index()
    {
        return view('member.users.index');
    }
}
