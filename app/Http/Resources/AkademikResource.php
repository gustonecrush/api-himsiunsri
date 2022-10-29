<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AkademikResource extends JsonResource
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
            'category' => $this->category,
            'thumbnail' => $this->thumbnail,
            'published_at' => $this->created_at,
        ];
    }

    public function toDate($date)
    {
        
    }
}
