<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userprofile;

class UserprofileController extends Controller
{

    public function index(Userprofile $userprofile)
    {
        return view("userprofile", [
            "userprofile" => $userprofile
        ]);
    }

    public function edit(Userprofile $userprofile)
    {
        return view("userprofile", [
            "userprofile" => $userprofile
        ]);
    }

    public function editUserprofile(Userprofile $userprofile, Request $request)
    {
        $data = $request->all();
        dd($data);
        $userprofile->fill($data)->save();
        return redirect("/userprofile");
    }


}