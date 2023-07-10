<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Soldado>
 */
class SoldadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom_s' => $this->faker->word,
            'Apell_s' => $this->faker->word,
            'Grado_s' => $this->faker->word,
        ];
    }
}
