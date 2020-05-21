<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Owners;
use App\Animals;

class Pages extends Controller
{
    public function search(Request $request) {
        $searchStr = $request->query('search');
        $ownerResults = DB::table('owners')->where('firstname', 'LIKE', "%$searchStr%")->get();
        $animalResults = DB::table('animals')->where('animal_name', 'LIKE', "%$searchStr%")->get();
        return view('search', ["ownerResults" => $ownerResults,"animalResults" => $animalResults]);
    }

    public function about() {
        return view ('about');
    }
    public function contact() {
        return view ('contact');
    }

}