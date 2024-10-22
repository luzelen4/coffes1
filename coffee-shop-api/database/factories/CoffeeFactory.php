<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coffe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coffee>
 */
class CoffeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
        'nombre' => $this->faker->word(),
        'descripcion' => $this->faker->sentence(),
        'precio' => $this->faker->randomFloat(2, 5, 50),
        'stock' => $this->faker->numberBetween(10, 100),
        'tipo_cafe' => $this->faker->randomElement(['Arabica', 'Robusta', 'Liberica']),
        'intensidad' => $this->faker->randomFloat(1, 0, 10),
        'disponible' => $this->faker->boolean(),
        'origen' => $this->faker->country(),
        'procesamiento' => $this->faker->randomElement(['Lavado', 'Natural', 'Honey']),
        'fecha_tostado' => $this->faker->date()
        ];
    }
}
