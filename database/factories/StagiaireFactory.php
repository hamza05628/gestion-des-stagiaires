<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stagiaire>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
         //   'numéro_dinscription' => fake()->numberBetween(0,100),
            'nom' => fake()->lastName(),
            'prenom' => fake()->firstName(),
            'ecole' => fake()->city(),
            'filiere' => fake()->city(),
            'ville' => fake()->city(),
            'phone' => fake()->numberBetween(),
            'date_de_début' => fake()->date(),
            'date_de_fin' => fake()->date(),
            'cv' => fake()->lastName(),
            'demande_de_stage' => fake()->lastName(),

        ];
    }
}
