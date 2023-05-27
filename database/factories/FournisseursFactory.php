<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fournisseurs>
 */
class FournisseursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
                'nom'=>fake()->name(),
                'prenom'=>fake()->name(),
                'telephone'=>fake()->regexify('[1-9]{1}[0-9]{2}[1-9]{1}[0-9]{4}'),
            
        ];
    }
}
