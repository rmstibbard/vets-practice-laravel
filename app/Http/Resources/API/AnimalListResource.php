<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // dd($this->owner);

         return [
            "id" => $this->id,
            "name" => $this->name,
            "animal_type" => $this->animal_type,
            "height" => $this->height,
            "weight" => $this->weight,
            "biteyness" => $this->biteyness,
            "owner" => $this->owner->fullName()  // No need for pluck as only one owner
        ];
    }
}