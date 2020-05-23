<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "animal_name" => $this->animal_name,
            "animal_type" => $this->animal_type,
            "height" => $this->height,
            "weight" => $this->weight,
            "biteyness" => $this->biteyness,
            "owner" => $this->owner->fullName(), // No need for pluck as only one owner
            "treatments" => $this->treatments->pluck("name") // Pluck for multiple treatments
        ];
    }
}