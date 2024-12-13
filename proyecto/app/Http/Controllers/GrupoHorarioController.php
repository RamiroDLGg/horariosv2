<?php
 
namespace App\Http\Controllers;
 
use App\Models\Hora;
use App\Models\Grupo;
use App\Models\Lugar;
use App\Models\Carrera;
use App\Models\Periodo;
use App\Models\Edificio;
use App\Models\Personal;
use App\Models\GrupoHorario;
use Illuminate\Http\Request;
use App\Models\HorarioMaestro;
use App\Models\MateriaAbierta;
use App\Models\HorarioMaestroGrupo;
 
class GrupoHorarioController extends Controller
{
 
    public $periodo_id;
 
    public $carrera_id;
 
    public $semestre;
 
    public $filtrotriple;
 
    public $filtroma;
 
    public $validado;
 
    public $lugars;
 
    public $edificio_id;
 
    public function __construct()
    {
 
        $this->validado = [
            'grupo' => 'required|string|max:255|unique:grupos,grupo',
            'maxAlumnos' => 'required|string|max:255',
            'materia_id' => 'required|exists:materias,id',
            'personal_id' => 'required|exists:personals,id'
        ];
 
        //to lo del requests debe ser del FORM de la vista los inputs
        //los this son de aki de la clase
        if (request()->idperiodo) {
            $this->periodo_id = request()->idperiodo;
            session(['periodo_id' => request()->idperiodo]);
        } else {
            $this->periodo_id = (session()->exists('periodo_id') ? session('periodo_id') : "-1");
        }
 
        if (request()->idcarrera) {
            $this->carrera_id = request()->idcarrera;
            session(['carrera_id' => request()->idcarrera]);
        } else {
            $this->carrera_id = (session()->exists('carrera_id') ? session('carrera_id') : "-1");
        }
 
        if (request()->sem) {
            $this->semestre = request()->sem;
            session(['semestre' => request()->sem]);
        } else {
            $this->semestre = (session()->exists('semestre') ? session('semestre') : "-1");
        }
 
        $this->filtrotriple = Carrera::with(['reticulas.materias' => function ($query) {
            $query
                ->where('semestre', $this->semestre);
        }])
            ->where('id', $this->carrera_id)->get();
 
 
        $this->filtroma = MateriaAbierta::where('periodo_id', $this->periodo_id)
            ->where('carrera_id', $this->carrera_id)
            ->get();
 
 
       //if de edificios
        if (request()->edificioid) {
            $this->edificio_id = request()->edificioid;
            session(['edificio_id' => request()->edificioid]);
        } else {
            $this->edificio_id = (session()->exists('edificio_id') ? session('edificio_id') : "-1");
        }
 
         //filtrar por edificios y mostrar los lugares
 
        $this->lugars = Lugar::where('edificio_id', $this->edificio_id)
            ->get();
 
    }
 
    public function index()
    {
        $periodos = Periodo::get();
        $carreras = Carrera::get();
        $personals = Personal::get();
        $horas = Hora::get();
        $edificios = Edificio::get();
       
     
 
 
        return view(
            "catalogos.aperturagrupo.index",
            [
                'periodos' => $periodos,
                'carreras' => $carreras,
                'personals' => $personals,
                'horas' => $horas,
                'edificios' => $edificios,
                'lugars' => $this->lugars,
                'filtrotriple' => $this->filtrotriple,
                'filtroma' => $this->filtroma
            ]
        );
    }
 
    public function create() {}
 
    public function store(Request $request)
    {
        $validado = $request->validate($this->validado);
 
        if ($this->periodo_id != "-1" && $this->carrera_id != "-1" && $this->semestre != "-1") {
            $grupo = Grupo::create([
                'grupo' => $request->grupo,
                'maxAlumnos' => $request->maxAlumnos,
                'periodo_id' => $this->periodo_id,
                'materia_id' => $request->materia_id,
                'personal_id' => $request->personal_id
 
 
                //this es paravariable session
                //request es para los inputs del form
                //ok papi
            ]);
 
            $horarioMaestro = HorarioMaestro::create([
                'fecha' => $request->fecha,
                'personal_id' => $request->personal_id,
                'periodo_id' => $this->periodo_id,
 
            ]);
 
            HorarioMaestroGrupo::create([
                'horario_maestro_id' => $horarioMaestro->id,
                'grupo_id' => $grupo->id
            ]);
 
            return redirect()->route('aperturagrupo.index')->with('success', 'Grupo creado correctamente');
        }
    }
}
 