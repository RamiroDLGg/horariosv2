<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Materia;
use App\Models\MateriaAbierta;
use App\Models\Periodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Json2Controller extends Controller
{
    //nos traemos los periodos, con la variable $periodos
    public function periodos(){
        $periodos = Periodo::all();
        return $periodos;
    }
 
    public function semestres(){
        $semestres = Materia::get();
        $semestres = DB::table('materias') 
        ->select('semestre')
        ->groupBy('semestre')
        ->OrderBy('semestre')
        ->get();
        return $semestres;
    }

    public function carreras(){
        $carreras = Carrera::all();
        return $carreras;
    }

    public function materiasa(){
        $materiasa = MateriaAbierta::with('materi.reticula.carrera')->get();
        return $materiasa;
    }
   
}
