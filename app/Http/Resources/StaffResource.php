<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffResource extends JsonResource
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
            "nim" => $this->nim,
            "password" => $this->password,
            "slug" => $this->slug,
            "dinas" => $this->dinas->name,
            "divisi" => $this->divisi->name,
            "ttl" => $this->ttl,
            "gender" => $this->gender,
            "alamat" => $this->alamat,
            "angkatan" => $this->angkatan,
            "jabatan" => $this->angkatan,
            "hobi" => $this->hobi,
            "email" => $this->email,
            "instagram" => $this->instagram,
            "periode" => $this->periode,
            "kesan_pesan" => $this->kesan_pesan,
            "picture" => $this->picture,
        ];
    }
}
