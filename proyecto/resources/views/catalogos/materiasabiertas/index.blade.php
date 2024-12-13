@extends("inicio2")

@section("contenido2")
<div class="container-fluid">
    <div class="row justify-content-between">
        <!-- Título de la página -->
        <div class="col-10">
            <h3 class="page-title">Apertura de Materias</h3>
        </div>
        <!-- Formulario para seleccionar periodo y carrera -->
        <div class="col-2">
            <form action="{{ route('materiasabiertas.index') }}" method="get" class="filter-form">
                <div class="mb-3">
                    <select name="idperiodo" id="idperiodo" onchange="this.form.submit()" class="form-select mb-2">
                        <option value="-1">Seleccione el periodo</option>
                        @foreach ($periodos as $periodo)
                            <option value="{{ $periodo->id }}" @if($periodo->id == session('periodo_id')) selected @endif>
                                {{ $periodo->id }} {{ $periodo->periodo }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <select name="idcarrera" id="idcarrera" onchange="this.form.submit()" class="form-select">
                        <option value="-1">Seleccione la carrera</option>
                        @foreach ($carreras as $carr)
                            <option value="{{ $carr->id }}" @if($carr->id == session('carrera_id')) selected @endif>
                                {{ $carr->nombreCarrera }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </div>

    <!-- Formulario de materias -->
    <div class="row">
        <div class="col">
            <form action="{{ route('materiasabiertas.store') }}" method="post">
                @csrf
                <input type="hidden" name="eliminar" id="eliminar" value="NOELIMINAR">

                @if($carrera->count() && session('periodo_id') != "-1")
                    @foreach ($carrera[0]->reticulas[0]->materias->groupBy('semestre') as $semestre => $materias)
                        @if($loop->index % 3 == 0)
                            <div class="row mb-4">
                        @endif
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm rounded animate__animated animate__fadeInUp">
                                <div class="card-header text-center bg-dark text-white">
                                    <h5>Semestre {{ $semestre }}</h5>
                                </div>
                                <div class="card-body">
                                    @foreach ($materias as $materia)
                                        <div class="form-check">
                                            <input 
                                                type="checkbox" 
                                                name="m{{ $materia->id }}" 
                                                value="{{ $materia->id }}" 
                                                class="form-check-input"
                                                id="materia_{{ $materia->id }}"
                                                onchange="enviar(this)"
                                                @if ($ma->firstWhere('materia_id', $materia['id'])) checked @endif>
                                            <label class="form-check-label" for="materia_{{ $materia->id }}">
                                                {{ $materia->nombreMateria }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @if($loop->iteration % 3 == 0 || $loop->last)
                            </div>
                        @endif
                    @endforeach
                @endif
            </form>
        </div>
    </div>

    <!-- Botón para abrir grupo -->
    <div class="text-center mt-3">
        <a href="{{ route('aperturagrupo') }}" class="btn btn-success btn-lg shadow-lg hover-scale">
            <h5>ABRIR GRUPO</h5>
        </a>
    </div>

</div>

<script>
    function enviar(chbox) {
        if (!chbox.checked) {
            document.getElementById('eliminar').value = chbox.value;
        }
        chbox.form.submit();
    }
</script>

<style>
    /* Estilos generales */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

    .page-title {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-top: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    .filter-form {
        margin-top: 20px;
        animation: fadeInUp 1s ease-in-out;
    }

    .filter-form select {
        border-radius: 5px;
        padding: 10px;
        font-size: 1rem;
        background-color: #fff;
        border: 1px solid #ccc;
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background-color: #006f3b;
        color: white;
    }

    .form-check-label {
        font-size: 1.1rem;
    }

    /* Animaciones */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    /* Estilos de botones */
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        padding: 15px 30px;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        transform: scale(1.05);
    }

    /* Efecto hover sobre el botón */
    .hover-scale:hover {
        transform: scale(1.1);
    }
</style>

@endsection
