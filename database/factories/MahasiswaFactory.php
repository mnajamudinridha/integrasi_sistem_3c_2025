<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->numerify('########'),
            'nama' => fake()->name(),
            'id_prodi' => \App\Models\Prodi::factory(),
            'email' => fake()->unique()->safeEmail(),
            'no_telp' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ];
    }
}
