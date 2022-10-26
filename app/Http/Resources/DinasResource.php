<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DinasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "slug" => $this->slug,
            "thumbnail" => $this->thumbnail,
            "singkatan" => $this->singkatan,
            "description" => $this->description,
        ];
    }
}
