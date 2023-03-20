<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Services::class;


    public function definition()
    {
        return [
            'libelle' => fake()->text(),
            'direction' => array('Direction 1','Direction 2','Direction 3')[rand(0,2)],
            'departement' => array('DEPARTEMENT 1','DEPARTEMENT 2','DEPARTEMENT 3')[rand(0,2)],
        ];
    }
}
