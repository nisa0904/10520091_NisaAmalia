<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pelanggan>
 */
class pelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => $this->faker->firstNameMale,
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'nomor_hp' => $this->faker->numberBetween(),
            'alamat' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
