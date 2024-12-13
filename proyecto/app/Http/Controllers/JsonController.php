<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Lugar;
use App\Models\Carrera;
use App\Models\GrupoHorario;
use App\Models\Materia;
use App\Models\Periodo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JsonController extends Controller
{
    // Función para obtener los datos necesarios para la P8 Grupos
    public function grupos()
    {
        // Obtener solo ID y nombrecarrera de Carrera
        $carrera = Carrera::all();
 
        // Obtener solo ID y periodo de Periodo
        $periodo = Periodo::all();
 
        // Obtener ID, semestre, carrera_id y nombre de Materia
        $materia = Materia::all();
 
 
 
 
        // Obtener solo ID y nombre de Place
        $place = Lugar::all();
 
 
        // Obtener todos los campos de Grupo
        $grupo = Grupo::all();
 
        $ghorario = GrupoHorario::all();
 
        // Devolver los datos en formato JSON
        return response()->json([
            'carreras' => $carrera,
            'periodos' => $periodo,
            'materias' => $materia,
            'places' => $place,
            'grupos' => $grupo,
            'ghorarios' => $ghorario
        ]);
    }
 
 
}
