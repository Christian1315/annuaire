<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Agent::class;


    public function definition()
    {
        return [
            'nom' => fake()->name(),
            'prenom' => fake()->name(),
            'poste' => array("Secretaire",'Directeur','Manager')[rand(0,2)],
            'direct_ligne' =>array('63524178','96857412','98652114')[rand(0,2)],
            'portable' => array('63524178','96857412','98652114')[rand(0,2)],
            'poste' => array('Poste 1','Poste 2','Poste 3')[rand(0,2)],
            'email' => fake()->unique()->safeEmail(),

            'fonction' => array("Secretaire",'Directeur','Manager')[rand(0,2)],
            'service' => array('Service 1','Service 2','Service 3')[rand(0,2)],
            'direction' => array('Direction 1','Direction 2','Direction 3')[rand(0,2)],
            'dga' => array('DGA 1','DGA 2','DGA 3')[rand(0,2)],
            'sous_service' => array('SOUS-SERVICE 1','SOUS-SERVICE 2','SOUS-SERVICE 3')[rand(0,2)],
            'departement' => array('DEPARTEMENT 1','DEPARTEMENT 2','DEPARTEMENT 3')[rand(0,2)],
        ];
    }
}
