<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prodi>
 */
class ProdiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_prodi' => fake()->randomElement([
                'Teknik Informatika',
                'Sistem Informasi',
                'Teknik Komputer',
                'Manajemen Informatika',
                'Teknik Elektro',
                'Teknik Mesin',
            ]),
        ];
    }
}
