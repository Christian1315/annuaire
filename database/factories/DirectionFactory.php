<?php

namespace Database\Factories;

use App\Models\Direction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Direction>
 */
class DirectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Direction::class;


    public function definition()
    {
        return [
            'libelle' => fake()->text(),
            'code' => fake()->randomNumber(),
            'dga' => array('DGA 1','DGA 2','DGA 3')[rand(0,2)],
        ];
    }
}
