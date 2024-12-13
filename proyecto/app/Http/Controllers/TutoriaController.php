<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use App\Models\Alumno;
use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Periodo;
use App\Models\Tutoria;
use App\Models\Personal;
use Illuminate\Http\Request;

class TutoriaController extends Controller
{
    public function index()
    {
        // Obtener departamentos
        $departamentos = Depto::all();
        $carreras = Carrera::all();
        $personals = Personal::all();
        $periodos = Periodo::all();
        // Obtener alumnos con su carrera, retícula y materias
        $alumnos = Alumno::with('carrera.reticulas.materias')->get();
        $materias = Materia::all(); // Ya agregaste esto antes
    $departamentos = Depto::all(); // Obteniendo todos los departamentos

   
        // Obtener tutorías con relaciones necesarias
        $tutorias = Tutoria::with(['alumno', 'materia'])->get();

        return view('catalogos.tutorias.index', compact('departamentos', 'tutorias', 'carreras', 'alumnos', 'personals', 'periodos','materias', 'departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'depto_id' => 'required|exists:deptos,id',
            'personal_id' => 'required|exists:personals,id',
            'periodo_id' => 'required|exists:periodos,id',
            'carrera_id' => 'required|exists:carreras,id',
            'alumnos' => 'required|json',
        ]);

        // Crear la tutoria
        $tutoria = new Tutoria();
        $tutoria->depto_id = $request->depto_id;
        $tutoria->personal_id = $request->personal_id;
        $tutoria->periodo_id = $request->periodo_id;
        $tutoria->materia_id = $request->materia_id; // Esto es necesario si el campo es obligatorio.
        $tutoria->carrera_id = $request->carrera_id;
        $tutoria->alumno_id = $request->alumno_id; // Este debe tener un valor válido.
        $tutoria->alumno_id = $request->input('alumno_id'); // Ensure alumno_id is set
        $tutoria->save();

        // Guardar los alumnos
        $alumnos = json_decode($request->alumnos, true);
        foreach ($alumnos as $alumnoData) {
            $alumno = new Alumno();
            $alumno->noctrl = $alumnoData['noctrl'];
            $alumno->nombre = $alumnoData['nombre'];
            $alumno->apellidop = $alumnoData['apellidop'];
            $alumno->apellidom = $alumnoData['apellidom'];
            $alumno->semestre = $alumnoData['semestre'];
            $alumno->tutoria_id = $tutoria->id;
            $alumno->save();
        }

        return redirect()->route('tutorias.index')->with('success', 'Tutoría guardada exitosamente.');
    }
    public function show(Tutoria $tutoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tutoria $tutoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tutoria $tutoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tutoria $tutoria)
    {
        //
    }
}
