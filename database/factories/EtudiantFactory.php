<?php

namespace Database\Factories;


use App\Models\Etudiant;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;



class EtudiantFactory extends Factory
{
    
    protected $model = Etudiant::class;
    /**
     * Define the model's default state.
     
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=> $this->faker->lastname(),
            'prenom'=> $this->faker->firstname(),
            'classes_id'=>rand(1,6),

        ];
    }
}
