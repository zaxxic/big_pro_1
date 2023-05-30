<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function usersindex()
    {
        return view('user.index');
    }
    public function add_users()
    {
        return view('user.add');
    }
}
