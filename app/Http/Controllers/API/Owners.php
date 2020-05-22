<?php

namespace App\Http\Controllers\API;

use App\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\API\OwnerRequest as OwnerRequest;
use App\Http\Resources\API\OwnerResource;
use App\Http\Resources\API\OwnerListResource;
use App\Http\Requests\OwnerStoreRequest;

class Owners extends Controller
{

    public function index() {
        return OwnerListResource::collection(Owner::all());
    }

    public function show(Owner $owner) {
        //return $owner;
        return new OwnerResource($owner);
    }

    public function store(OwnerStoreRequest $request) {
        $data = $request->all();
        $owner = Owner::create($data);
    }

    public function update(Owner $request, Owner $owner) {
        $data = $request->all();
        $owner = Owner::update($data);
    }

    public function destroy(Owner $owner) {
        $owner->delete($owner);
        return response(null, 204);
    }

}