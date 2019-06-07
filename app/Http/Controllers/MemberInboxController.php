<?php

namespace MicroGames\Http\Controllers;

use MicroGames\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberInboxController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $inbox = $user->inbox()->get();
        return view('member.inbox.index', compact('inbox'));
    }

    public function detail($id)
    {
        $message = Inbox::find($id)->where('user_id_receiver', Auth::user()->id)->first();
        return view('member.inbox.detail',compact('message'));
    }

    public function create()
    {
        return view('member.inbox.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'user_id_receiver' => 'required|max:191',
            'title' => 'required|max:191',
            'text' => 'required',
        ]);
        $input['user_id_sender'] = Auth::user()->id;

        Inbox::create($input);
        return redirect(route('memberInboxIndex'));
    }

    public function createId($id)
    {
        return view('member.inbox.create');
    }

    public function destroy($id)
    {
        Inbox::find($id)->where('user_id_receiver', Auth::user()->id)->first()->delete();
        return redirect(route('game'));
    }
}
