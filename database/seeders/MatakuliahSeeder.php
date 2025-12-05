<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Matakuliah::factory()->create(['nama_matakuliah' => 'Pemrograman Web', 'sks' => 3]);
        \App\Models\Matakuliah::factory()->create(['nama_matakuliah' => 'Basis Data', 'sks' => 3]);
        \App\Models\Matakuliah::factory()->create(['nama_matakuliah' => 'Algoritma dan Struktur Data', 'sks' => 4]);
        \App\Models\Matakuliah::factory()->create(['nama_matakuliah' => 'Jaringan Komputer', 'sks' => 3]);
        \App\Models\Matakuliah::factory()->create(['nama_matakuliah' => 'Sistem Operasi', 'sks' => 3]);
    }
}
