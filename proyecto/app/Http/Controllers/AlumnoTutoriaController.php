<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AlumnoTutoria;

class AlumnoTutoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'noctrl' => 'required|string',
            'nombre' => 'required|string',
            'apellidop' => 'required|string',
            'apellidom' => 'required|string',
            'semestre' => 'required|string',
            'tutoria_id' => 'required|exists:tutorias,id',
            'depto_id' => 'required|exists:departamentos,id',
            'personal_id' => 'required|exists:personals,id',
            'periodo_id' => 'required|exists:periodos,id',
            'carrera_id' => 'required|exists:carreras,id',
            'materia_id' => 'required|exists:materias,id',
        ]);
    
        AlumnoTutoria::create($validatedData);
    
        return redirect()->route('tutorias.index')->with('success', 'Registro añadido correctamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(AlumnoTutoria $alumnoTutoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AlumnoTutoria $alumnoTutoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AlumnoTutoria $alumnoTutoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AlumnoTutoria $alumnoTutoria)
    {
        //
    }
}
