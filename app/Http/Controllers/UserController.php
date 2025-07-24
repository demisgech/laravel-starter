<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public static function all()
    {
        return User::all();
    }

}
