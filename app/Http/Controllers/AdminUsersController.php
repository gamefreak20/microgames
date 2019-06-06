<?php

namespace App\Http\Controllers;

use App\tags;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminUsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function detail($id)
    {
        return view('admin.users.detail');
    }

    public function assignRole(Request $request)
    {
        $user = User::findOrFail($request->user_id);

        switch ($request->role) {
            case 'Member':
                $user->syncRoles('Member');
                break;
            case 'Creator':
                $user->syncRoles('Creator');
                break;
            case 'Admin':
                $user->syncRoles('Admin');
                break;

            default:
                return redirect(route('adminUsersRoles'));
        }
        return redirect(route('adminUsersRoles'));
    }

    public function roles()
    {
        $users = User::paginate(1);
        return view('admin.roles.index', compact('users'));
    }

    public function createTagForm()
    {
        return view('admin.tags.create');
    }

    public function createTag(Request $request)
    {
        Tags::create(['name' => $request->name]);
        return redirect(route('game'));
    }

    //testing remove when done

    public function setAllRoles()
    {
        Role::create(['name' => 'Member']);
        Role::create(['name' => 'Creator']);
        Role::create(['name' => 'Admin']);
    }
}
