@extends('inicio2')

@section('bienvenida')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Sección de bienvenida */
        .welcome-section {
            background-image: url('./img/fondo2.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            padding: 50px;
        }

        .welcome-section img {
            width: 100px;
            margin-bottom: 30px;
        }

        .welcome-section h2 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .welcome-section h1 {
            font-size: 2.5rem;
            margin-top: 20px;
            transition: transform 0.3s ease;
        }

        .welcome-section h1:hover {
            transform: scale(1.1);
        }

        /* Animación de fade-in */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Estilo para los botones */
        .welcome-section a h1 {
            display: inline-block;
            background-color: #34974d;
            color: white;
            padding: 15px 30px;
            margin-top: 20px;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .welcome-section a h1:hover {
            background-color: #2e8644;
            transform: scale(1.1);
        }

        /* Sección de catálogo de maestros */
        .catalog-section {
            background-image: url('./img/fondo4-portafolio.jpg');
            background-size: cover;
            padding: 50px 0;
            color: white;
        }

        .catalog-section h2, .catalog-section p {
            animation: fadeInUp 1s ease-in-out;
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            text-align: center;
        }

        .card-img-top {
            border-radius: 10px;
        }

        /* Sección del TECNM */
        .tecnm-section {
            background-image: url('./img/fondo3-ubicacion.jpg');
            background-size: cover;
            padding: 5% 0;
            text-align: center;
            color: white;
        }

        .tecnm-section h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .tecnm-section p {
            font-size: 1.2rem;
            line-height: 1.8;
        }

        /* Sección de carreras y director */
        .careers-section {
            background-image: url('./img/fondo-muy-vacio.png');
            background-size: cover;
            padding: 5% 0;
            color: white;
        }

        .careers-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .director-card {
            background-color: rgba(255, 255, 255, 0.9);
            color: black;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .director-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body style="background-color: #000000">
    <!-- Sección de bienvenida -->
    <section class="welcome-section">
        <div class="text-center">
            <img src="{{ asset('img/logo-tec.png') }}" alt="Logo Tec" />
            <h2>BIENVENIDOS A HORARIOS 2024</h2>

            <a href="{{ route('materiasabiertas') }}">
                <h1>ABRIR MATERIAS</h1>
            </a>

            <a href="{{ route('tutorias') }}">
                <h1>ASIGNAR TUTORES</h1>
            </a>

            <p> Nuestra visión es que los momentos de nuestros alumnos <strong>sean</strong><br>
                <strong>inolvidables</strong> y que nuestras clases cuenten con la calidad <br> que buscamos en nuestras vidas.
            </p>
        </div>
    </section>

    <!-- Sección de catálogo de maestros -->
    <section class="catalog-section">
        <h2>CATÁLOGO DE MAESTROS</h2>
        <p>ESTOS SON NUESTROS MEJORES DOCENTES</p>

        <div class="row justify-content-around">
            <div class="col-md-2">
                <div class="card">
                    <img src="{{ asset('img/docente-1.jpg') }}" class="card-img-top" alt="Docente 1">
                    <div class="card-body">
                        <h3 class="card-title">ING. ARMANDO CAPETILLO</h3>
                        <p class="card-text">DESDE 1980 A LA FECHA</p>
                    </div>
                </div>
            </div>
            <!-- Repetir este bloque para los demás docentes -->
        </div>
    </section>

    <!-- Sección de TECNM -->
    <section class="tecnm-section">
        <h2>TECNM: EL CÉNIT DE PIEDRAS NEGRAS</h2>
        <p>UNA NUEVA EXPERIENCIA EN LA EDUCACIÓN, CARGADA DE NOVEDADES Y CONTENIDO,<br>
            QUE EMPIEZA A SER TENDENCIA EN LA CIUDAD, CON DINÁMICAS, COLABORACIONES,<br>
            PRECIOS INCREIBLES Y MUCHO MÁS EN LO QUE SERÁ UNA EXPERIENCIA ÚNICA.
        </p>
    </section>

    <!-- Sección de carreras y director -->
    <section class="careers-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2>DISFRUTA DE LAS MEJORES CARRERAS DE LA CIUDAD</h2>
                    <p>FORMA PARTE DE NUESTRA ESCUELA Y COMPARTE TU EXPERIENCIA CON LOS DEMÁS.</p>
                </div>
                <div class="col-md-6">
                    <h2>Director del plantel</h2>
                    <div class="director-card card">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Gustavo Emilio Rojo Velázquez</h5>
                            <p class="card-text"><small class="text-muted">Desde 2024/01/21</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="{{ route('tutorias') }}">
        <h1>ASIGNAR TUTORES</h1>
    </a><br>
</body>
</html>

@endsection
