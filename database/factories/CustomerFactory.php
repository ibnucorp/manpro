<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nomor_antri' => $this->faker->unique()->numberBetween(1, 1000),
            'gender' => $this->faker->randomElement(['Pria', 'Perempuan']),
            'jenis_antrian' => $this->faker->randomElement(['Makan di Tempat', 'Bungkus']),
        ];
    }
}
