<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory; 
use OCILob;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */ 
    public function definition(): array
    {
        $valoresAsistencia = ['A', 'T', 'F'];
        return [
            'asistencia' => $valoresAsistencia[$this->faker->unique()->numberBetween(0, 2)],
        ];
    }
}
