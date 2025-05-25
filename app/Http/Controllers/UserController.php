<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{



    public function index()
    {
        $users =  User::with('roles')->get();
        return view('admin.user.table', compact('users'));
    }



    public function create()
    {
        $roles = Role::all();
        return view('admin.user.form',compact('roles'));
    }
}
