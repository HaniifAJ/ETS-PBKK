<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekam>
 */
class RekamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pasien_id' => mt_rand(1,2),
            'dokter_id' => mt_rand(1,2),
            'kondisi' => $this->faker->paragraph(),
            'suhu' => mt_rand(35, 45),
            'filepath' => $this->faker->sha256().'.png',

        ];
    }
}
