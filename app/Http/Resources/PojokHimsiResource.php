<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PojokHimsiResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'author' => $this->author,
            'content' => $this->content,
            'periode' => $this->periode,
            'cover' => $this->cover,
        ];
    }
}
