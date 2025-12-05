<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Prodi::factory()->create(['nama_prodi' => 'Teknik Informatika']);
        \App\Models\Prodi::factory()->create(['nama_prodi' => 'Sistem Informasi']);
        \App\Models\Prodi::factory()->create(['nama_prodi' => 'Teknik Komputer']);
        \App\Models\Prodi::factory()->create(['nama_prodi' => 'Manajemen Informatika']);
    }
}
