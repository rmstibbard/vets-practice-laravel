<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ["firstname", "lastname", "address_1", "address_2", "town", "postcode", "landline", "mobile"];

    public function fullName()
    {
        return $this->firstname . " " . $this->lastname;
    }


    public function formattedPhoneNumber()
    {
        $part1 = substr($this->landline, 0, 5);
        $part2 = substr($this->landline, 5, 3);
        $part3 = substr($this->landline, 8, 3);
        return $part1 . " " . $part2 . " " . $part3;
    }

    public function fullAddress()
    {
        return $this->address_1 . ", " . $this->address_2 . ", " . $this->town . ", " . $this->postcode . ". Landline: " . $this->formattedPhoneNumber() . ". Mobile: " . $this->mobile;
    }

    public function animals()
    {
        // use hasMany relationship method
        return $this->hasMany(Animal::class);
    }
}