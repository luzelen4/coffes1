<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoriaFactory extends Factory
{
    protected $model = Coffe::class;

    public function definition()
    {
        return [
            'coffee_name' => $this->faker->sentence,
            'coffee_date' => $this->faker->dateTime,
            'coffee_max_capacity' => $this->faker->numberBetween(50, 500),
            'coffee_speaker_name' => $this->faker->name,
            'coffee_meetup_url' => $this->faker->url,
            'coffee_is_virtual' => $this->faker->boolean,
            'categoria_id' => Categoria::factory(),
        ];
    }
}
