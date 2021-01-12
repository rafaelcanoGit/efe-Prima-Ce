<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Film::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    

    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name,
            'description' => $this->faker->paragraph(3, false),
            'lenguaje_id' => 1,
            'rental_duration' => $this->faker->numberBetween(60, 120),
            'rental_rate' => $this->faker->numberBetween(60, 120),
            'length' => $this->faker->numberBetween(2, 10),

        ];
    }
}
