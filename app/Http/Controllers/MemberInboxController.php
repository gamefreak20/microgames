<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberInboxController extends Controller
{
    public function index()
    {
        return view('member.inbox.index');
    }

    public function detail($id)
    {
        return view('member.inbox.detail');
    }

    public function create()
    {
        return view('member.inbox.create');
    }

    public function createId($id)
    {
        return view('member.inbox.create');
    }
}
