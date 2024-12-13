@extends('inicio2')

@section('contenido2')
<div class="row">
    <div class="col-12">
        <h1 class="fw-bold text-center my-4">Selecciona uno</h1>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Periodos</div>
                    <a href="{{ route('periodos.index') }}"><button class="badge text-bg-primary rounded-pill">Ver Periodos</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Plazas</div>
                    <a href="{{ route('plazas.index') }}"><button class="badge text-bg-primary rounded-pill">Ver Plazas</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Puestos</div>
                    <a href="{{ route('puestos.index') }}"><button class="badge text-bg-primary rounded-pill">Ver Puestos</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">4</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Deptos</div>
                    <a href="{{ route('deptos.index') }}"><button class="badge text-bg-primary rounded-pill">Ver Departamentos</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Carreras</div>
                    <a href="{{ route('carreras.index') }}"><button class="badge text-bg-primary rounded-pill">Ver Carreras</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">16</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Reticulas</div>
                    <a href="{{ route('reticulas.index') }}"><button class="badge text-bg-primary rounded-pill">Ver Reticulas</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">3</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Materias</div>
                    <a href="{{ route('materias.index') }}"><button class="badge text-bg-danger rounded-pill">Ver Materias</button></a>
                </div>
                <span class="badge text-bg-danger rounded-pill">5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Alumnos</div>
                    <a href="{{ route('alumnos.index') }}"><button class="badge text-bg-primary rounded-pill">Ver Alumnos</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">12</span>
            </li>

            <!-- Nuevos campos de práctica 6 -->
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Personal</div>
                    <a href="{{ route('personal.index') }}"><button class="badge text-bg-warning rounded-pill">Ver Personal</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Edificios</div>
                    <a href="{{ route('edificios.index') }}"><button class="badge text-bg-warning rounded-pill">Ver Edificios</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Lugares</div>
                    <a href="{{ route('lugares.index') }}"><button class="badge text-bg-warning rounded-pill">Ver Lugares</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Horas</div>
                    <a href="{{ route('horas.index') }}"><button class="badge text-bg-warning rounded-pill">Ver Horas</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start shadow-sm rounded-3 mb-2 hover-list-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Personal Plazas</div>
                    <a href="{{ route('personalplazas.index') }}"><button class="badge text-bg-warning rounded-pill">Ver Personal Plazas</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">10</span>
            </li>
        </ol>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Estilos para los efectos hover */
    .hover-list-item {
        transition: all 0.3s ease;
    }

    .hover-list-item:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background-color: #f0f8ff;
    }

    .list-group-item {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .list-group-item .badge {
        transition: background-color 0.3s ease;
    }

    .list-group-item .badge:hover {
        background-color: #ff9800;
        color: #fff;
    }

    .fw-bold {
        color: #333;

        .button {
  position: relative;
  width: 150px;
  height: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  border: 1px solid #34974d;
  background-color: #3aa856;
}

.button, .button__icon, .button__text {
  transition: all 0.3s;
}

.button .button__text {
  transform: translateX(30px);
  color: #fff;
  font-weight: 600;
}

.button .button__icon {
  position: absolute;
  transform: translateX(109px);
  height: 100%;
  width: 39px;
  background-color: #34974d;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button .svg {
  width: 30px;
  stroke: #fff;
}

.button:hover {
  background: #34974d;
}

.button:hover .button__text {
  color: transparent;
}

.button:hover .button__icon {
  width: 148px;
  transform: translateX(0);
}

.button:active .button__icon {
  background-color: #2e8644;
}

.button:active {
  border: 1px solid #2e8644;
}
    }
</style>
@endsection
