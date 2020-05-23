<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Owner;

use App\Http\Requests\AnimalRequest;

class Animals extends Controller
{

    // VIEW ANIMALS
    public function index()
    {
        return view("animals", [
            "animals" => Animal::all()
        ]);
    }

    // VIEW ANIMAL
    public function show(Animal $animal)
    {
        return view("animal", [
            "animal" => $animal
        ]);
    }

    // EDIT ANIMAL
    public function edit(Animal $animal)
    {
        return view("editAnimal", [
            "animal" => $animal,
            "owners" => Owner::all()
        ]);
    }

    public function editAnimal(Animal $animal, AnimalRequest $request)
    {
        $data = $request->all();
        $treatments = explode(",", $request->get("treatments"));
        $animal->fill($data)->save();
        $animal->setTreatments($treatments);
        return redirect("/animals/{$animal->id}");
    }

    // CREATE ANIMAL
    public function create()
    {
         return view("createAnimal",[
            "animal" => null,
            "owners" => Owner::all()
         ]);
    }

    public function createAnimal(Request $request)
    {
        $data = $request->all();
        dd($data);
        $animal = Animal::create($data);
        return redirect("/animals/{$animal->id}");
    }

    // DELETE ANIMAL
    public function deleteAnimal(Animal $animal) {
        $animal->delete($animal);
        return redirect("/animals");
    }

}
