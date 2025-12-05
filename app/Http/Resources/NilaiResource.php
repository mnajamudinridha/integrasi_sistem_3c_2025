<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NilaiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_nilai' => $this->id_nilai,
            'nim' => $this->nim,
            'mahasiswa' => new MahasiswaResource($this->whenLoaded('mahasiswa')),
            'id_matakuliah' => $this->id_matakuliah,
            'matakuliah' => new MatakuliahResource($this->whenLoaded('matakuliah')),
            'nilai' => $this->nilai,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
