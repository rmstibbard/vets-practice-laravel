<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    // VIEW USER PROFILE

    public function show(User $user)
    {
        return view("user", [
            "user" => $user
        ]);
    }

}
