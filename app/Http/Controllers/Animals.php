<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Http\Requests\AnimalRequest;

class Animals extends Controller
{

    public function index()
    {
        return view("animals", [
            "animals" => Animal::all()
        ]);
    }

    public function show(Animal $animal)
    {
        return view("animal", [
            "animal" => $animal
        ]);
    }

        public function edit(Animal $animal)
    {
        return view("editAnimal", [
            "animal" => $animal
        ]);
    }

    public function create()
    {
        return view("createAnimal");
    }

    public function createAnimal(Request $request)
    {
        $data = $request->all();
        $animal = Animal::create($data);
        return redirect("/animals/{$animal->id}");
    }

        public function editAnimal(Animal $animal, AnimalRequest $request)
    {
        $data = $request->all();
        $animal->fill($data)->save();
        return redirect("/animals/{$animal->id}");
    }

}