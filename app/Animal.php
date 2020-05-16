<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ["animal_name", "animal_type", "owner_id", "dob", "weight", "height", "biteyness"];

    public function animal_name()
    {
        return $this->animal_name;
    }
    public function animal_type()
    {
        return $this->animal_type;
    }
    public function dangerous() {
        return ($this->biteyness >=3 === true);
    }
    public function animalDetails() {
        return "DoB: " . date('j M Y', strtotime($this->dob)) . ". Weight: " . $this->weight . "kg. Height: " . $this->height . "cm. Biteyness score: " . $this->biteyness;
    }

}
