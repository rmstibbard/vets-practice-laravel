<?php

namespace App\Http\Controllers;
use App\User;
use Hash;

use Illuminate\Http\Request;
//use App\Http\Requests\UserRequest;

class Users extends Controller {

    // VIEW USERS
    public function index()
    {
        return view("users", [
            "users" => User::all()
        ]);
    }


    // VIEW USER
    public function show(User $user)
    {
        return view("user", [
            "user" => $user
        ]);
    }


    public function edit(User $user)
    {
        return view("editUser", [
            "user" => $user
        ]);
    }

    public function editUser(User $user, Request $request)
    {
        $data = $request->all();
        $user->fill($data)->save();
        return redirect("/users/{$user->id}");
    }

    // CREATE USER
    public function create()
    {
        return view("createUser",[
            "user" => null
        ]);
    }

    public function createUser(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return redirect("/users");
    }

    // DELETE USER
    public function deleteUser(User $user) {
        $user->delete($user);
        return redirect("/users");
    }


}
