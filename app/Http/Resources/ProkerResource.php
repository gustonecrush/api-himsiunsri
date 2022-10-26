<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProkerResource extends JsonResource
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
            "date" => $this->date,
            "target_audience" => $this->target_audience,
            "description" => $this->description,
            "periode" => $this->periode,
            "status_proker" => $this->toStatusProker($this->status_proker),
        ];
    }

    public function toStatusProker($status) 
    {
        switch ($status) {
            case 0:
                return "Belum Terlaksana";
                break;
            case 1:
                return "Terlaksana";
                break;
            default:
            break;
        }
    }
}
