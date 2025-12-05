<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MatakuliahResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_matakuliah' => $this->id_matakuliah,
            'nama_matakuliah' => $this->nama_matakuliah,
            'sks' => $this->sks,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
