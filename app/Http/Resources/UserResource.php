<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  
            [
                "id"=>(integer)$this->id,
                "phone"=>(string)$this->phone,
                "name"=>(string)$this->name,
                "role"=>(integer)$this->role,
            ];
    }
}
