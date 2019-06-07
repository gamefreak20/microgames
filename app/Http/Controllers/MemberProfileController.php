<?php

namespace MicroGames\Http\Controllers;

use MicroGames\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('member.profile.index', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('member.profile.edit', compact('user'));
    }

    public function patch(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|max:191',
            'first_name' => 'max:191',
            'last_name' => 'max:191',
            'email' => 'email|required|max:191',
        ]);


        $user = User::findOrFail(Auth::user()->id);

        if ($user->password != null) {
            /*
            if (!Hash::check($input['oldPassword'], $user->password)) {
                return $user->password;
//                return redirect(route('memberProfileEditForm'))->withErrors(['msg', 'You need to type the right password in']);;
            }
            */
            if (isset($request['password1'])) {
                if ($request['password1'] == $request['password2']) {
                    $input['password'] = Hash::make($request['password1']);
                } else {
                    return redirect(route('memberProfileEditForm'))->withErrors(['msg', 'Your passwords do not match']);;
                }
            }
        }

        User::findOrFail($user->id)->update($input);

        return redirect(route('memberProfile'));

    }

}
