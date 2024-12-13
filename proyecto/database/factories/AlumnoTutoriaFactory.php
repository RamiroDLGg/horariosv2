<?php

namespace Database\Factories;

use App\Models\Depto;
use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Periodo;
use App\Models\Tutoria;
use App\Models\Personal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlumnoTutoria>
 */
class AlumnoTutoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noctrl' => $this->faker->numerify('########'), // Número de control
            'nombre' => $this->faker->firstName,
            'apellidop' => $this->faker->lastName,
            'apellidom' => $this->faker->lastName,
            'semestre' => 'Semestre ' . $this->faker->numberBetween(1, 12),
            'tutoria_id' => Tutoria::factory(),
            'depto_id' => Depto::factory(),
            'personal_id' => \App\Models\Personal::inRandomOrder()->first()->id ?? 1,
            'periodo_id' => Periodo::factory(),
            'carrera_id' => Carrera::factory(),
            'materia_id' => Materia::factory(),
        ];
    }
}
