<?php

namespace App\Http\Controllers;

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

    public function assignRole($user_id, $role_name)
    {
        $user = User::findOrFail($user_id);
        return $user->assignRole($role_name);
    }

    //testing remove when done

    public function setAllRoles()
    {
        Role::create(['name' => 'Member']);
        Role::create(['name' => 'Creator']);
        Role::create(['name' => 'Admin']);
    }
}
