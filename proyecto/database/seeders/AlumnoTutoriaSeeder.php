<?php

namespace Database\Seeders;

use App\Models\AlumnoTutoria;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlumnoTutoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 50 registros ficticios en la tabla alumno_tutorias
        AlumnoTutoria::factory()->count(50)->create();
    }
}
