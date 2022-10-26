<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LayananResource extends JsonResource
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
            "available_status" => $this->toStatusLabel($this->available_status),
        ];
    }

    public function toStatusLabel($availableStatus) 
    {
        switch ($availableStatus) {
            case 0:
                return "Coming Soon";
                break;
            case 1:
                return "Not Available";
                break;
            case 2:
                return "Available";
                break;  
            default:
                break;
        }
    }
}
