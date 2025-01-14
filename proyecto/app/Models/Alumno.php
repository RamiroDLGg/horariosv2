<?php

namespace App\Models;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    /** @use HasFactory<\Database\Factories\AlumnoFactory> */
    use HasFactory;

 // Define la relación con Carrera
 public function Carrera(): BelongsTo
 {
     return $this->belongsTo(Carrera::class);
 }

 public function tutorias()
 {
     return $this->hasMany(Tutoria::class, 'alumno_id');
 }

 protected $fillable = [
    'noctrl',
    'nombre',
    'apellidop',
    'apellidom',
    'semestre',
    'sexo',
     'email',
    'carrera_id',];

}
