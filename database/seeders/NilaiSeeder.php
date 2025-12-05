<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = \App\Models\Mahasiswa::query()->pluck('nim');
        $matakuliah = \App\Models\Matakuliah::query()->pluck('id_matakuliah');

        foreach ($mahasiswa as $nim) {
            foreach ($matakuliah->random(3) as $idMatakuliah) {
                \App\Models\Nilai::factory()->create([
                    'nim' => $nim,
                    'id_matakuliah' => $idMatakuliah,
                ]);
            }
        }
    }
}
