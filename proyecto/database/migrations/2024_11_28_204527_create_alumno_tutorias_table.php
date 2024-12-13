<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumno_tutorias', function (Blueprint $table) {
            $table->id();
            $table->string('noctrl'); // Número de control del alumno
            $table->string('nombre'); // Nombre del alumno
            $table->string('apellidop'); // Apellido paterno
            $table->string('apellidom'); // Apellido materno
            $table->string('semestre'); // Semestre
            $table->unsignedBigInteger('tutoria_id');

            // Relaciones adicionales
            $table->foreignId('tutoria_id')->constrained('tutorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('depto_id')->constrained('departamentos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('personal_id')->constrained('personals')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('periodo_id')->constrained('periodos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('carrera_id')->constrained('carreras')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('materia_id')->constrained('materias')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno_tutorias');
    }
};
