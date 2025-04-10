<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Adicione os campos que sua tabela `places` realmente tiver
            // Exemplo:
            // 'name' => $this->faker->city,
        ];
    }
}
