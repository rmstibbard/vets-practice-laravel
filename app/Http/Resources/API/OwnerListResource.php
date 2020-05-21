<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerListResource extends JsonResource
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
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "address_1" => $this->address_1,
            "address_2" => $this->address_2,
            "town" => $this->town,
            "landline" => $this->landline,
            "mobile" => $this->mobile,
            "animals" => $this->animals->pluck('animal_name')  // Need pluck as more than one animal
        ];
    }
}