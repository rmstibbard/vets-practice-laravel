<?php

namespace App\Http\Controllers\API;
use App\Animal;
use App\Treatment;

use App\Http\Requests\API\AnimalRequest as AnimalRequest;
use App\Http\Resources\API\AnimalResource;
use App\Http\Resources\API\AnimalListResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Animals extends Controller
{

    public function index() {
        return AnimalListResource::collection(Animal::all());
    }

    public function show(Animal $animal) {
        return new AnimalResource($animal);
    }

    public function store(Request $request) {
        $data = $request->only(["animal_name", "animal_type", "dob", "weight", "height", "biteyness"]);
        $animal = Animal::create($data)->setTreatments($request->get("treatments"));
        return new AnimalResource($animal);
    }

    public function update(Request $request, Animal $animal) {
        $data = $request->only(["animal_name", "animal_type", "dob", "weight", "height", "biteyness"]);
        $animal->fill($data)->save();
        $animal->setTreatments($request->get("treatments"));
        return new AnimalResource($animal);
    }

    public function deleteAnimal(Animal $animal) {
        $animal->delete($animal);
        return response(null, 204);
    }

}