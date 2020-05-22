<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;
use Illuminate\Support\Collection;

class Treatment extends Model
{
    public $timestamps = false;

    public function animals() {
        return $this->belongsToMany(Animal::class);
    }

    protected $fillable = ["name"];

    static public function fromString(string $string) : Treatment
    {
        $string = trim($string);
        $treatment = Treatment::where("name", $string)->first();
        return $treatment ? $treatment : Treatment::create(["name" => $string]);
    }

    static public function fromStrings(array $strings) : Collection
    {
        return collect($strings)->map([Treatment::class, "fromString"])->unique("name");
    }

}
