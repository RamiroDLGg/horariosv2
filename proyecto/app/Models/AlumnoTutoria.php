<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlumnoTutoria extends Model
{
    
    /** @use HasFactory<\Database\Factories\AlumnoTutoriaFactory> */
    use HasFactory;

    // Especifica la tabla que este modelo utilizará
    protected $table = 'alumno_tutorias';

    // Especifica los campos que se pueden llenar masivamente
    protected $fillable = [
        Schema::create('alumno_tutorias', function (Blueprint $table) {
            $table->id();
            $table->string('noctrl');
            $table->string('nombre');
            $table->string('apellidop');
            $table->string('apellidom');
            $table->string('semestre');
            $table->unsignedBigInteger('tutoria_id');
            $table->unsignedBigInteger('depto_id');
            $table->unsignedBigInteger('personal_id');
            $table->unsignedBigInteger('periodo_id');
            $table->unsignedBigInteger('carrera_id');
            $table->unsignedBigInteger('materia_id');
            $table->timestamps();
        })
    ];
}
