<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'id_prodi' => $this->id_prodi,
            'prodi' => new ProdiResource($this->whenLoaded('prodi')),
            'email' => $this->email,
            'no_telp' => $this->no_telp,
            'alamat' => $this->alamat,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
