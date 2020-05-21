<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Owner;
use App\Http\Requests\OwnerRequest;

class Owners extends Controller
{

    // VIEW OWNERS
    public function index()
    {
        return view("owners", [
            "owners" => Owner::all()
        ]);
    }

    // VIEW OWNER
    public function show(Owner $owner)
    {
        return view("owner", [
            "owner" => $owner
        ]);
    }

    // EDIT OWNER
        public function edit(Owner $owner)
    {
        return view("editOwner", [
            "owner" => $owner
        ]);
    }

    public function editOwner(Owner $owner, Owner $request)
    {
        $data = $request->all();
        $owner->fill($data)->save();
        return redirect("/owners/{$owner->id}");
    }

    // CREATE OWNER
    public function create()
    {
        return view("createOwner");
    }

    public function createOwner(Request $request)
    {
        $data = $request->all();
        $owner = Owner::create($data);
        return redirect("/owners/{$owner->id}");
    }

}