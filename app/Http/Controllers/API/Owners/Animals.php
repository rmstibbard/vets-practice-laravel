<?php

namespace App\Http\Controllers\API\Owners;
use App\Animal;
use App\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\API\AnimalRequest as AnimalRequest;

class Animals extends Controller
{

    public function show(Owner $owner, Animal $animal) {
        return $owner->animals;
    }

    public function store(Owner $owner, Request $request) {
        $animal = new Animal();
        $data = $request->all();
        $animal->fill($data);
        $animal->owner_id = $owner->id;
        $animal->save();
        return $animal;
    }

}