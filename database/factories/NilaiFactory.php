<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nilai>
 */
class NilaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => \App\Models\Mahasiswa::factory(),
            'id_matakuliah' => \App\Models\Matakuliah::factory(),
            'nilai' => fake()->randomFloat(2, 0, 100),
        ];
    }
}
