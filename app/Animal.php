<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Owner;
use App\Treatment;

class Animal extends Model
{

    public function setTreatments(array $strings) : Animal
    {
        $treatments = Treatment::fromStrings($strings);
        $this->treatments()->sync($treatments->pluck("id"));
        return $this;
    }

    protected $fillable = [
        "animal_name",
        "animal_type",
        "owner_id",
        "dob",
        "weight",
        "height",
        "biteyness"
    ];

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }

    public function animal_name()
    {
        return $this->animal_name;
    }
    public function animal_type()
    {
        return $this->animal_type;
    }
    public function dangerous() {
        return ($this->biteyness >=4);
    }
    public function animalDetails() {
        return "DoB: " . date('j M Y', strtotime($this->dob)) . ". Weight: " . $this->weight . "kg. Height: " . $this->height . "cm. Biteyness score: " . $this->biteyness;
    }

    public function owner()
    {
        // use belongsTo relationship method
        return $this->belongsTo(Owner::class);
    }

}