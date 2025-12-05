<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodi = \App\Models\Prodi::query()->pluck('id_prodi');

        foreach ($prodi as $idProdi) {
            \App\Models\Mahasiswa::factory(5)->create([
                'id_prodi' => $idProdi,
            ]);
        }
    }
}
