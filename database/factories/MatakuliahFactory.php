<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_matakuliah' => fake()->randomElement([
                'Pemrograman Web',
                'Basis Data',
                'Algoritma dan Struktur Data',
                'Jaringan Komputer',
                'Sistem Operasi',
                'Rekayasa Perangkat Lunak',
                'Kecerdasan Buatan',
                'Matematika Diskrit',
            ]),
            'sks' => fake()->randomElement([2, 3, 4]),
        ];
    }
}
