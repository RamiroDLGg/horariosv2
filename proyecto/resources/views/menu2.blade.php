<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Horarios</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #212529;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            color: #fff;
            font-size: 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: color 0.3s ease-in-out;
        }

        .navbar-brand:hover {
            color: #03a9f4;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.1rem;
            padding: 15px 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: #03a9f4;
            color: #fff;
            border-radius: 5px;
        }

        .navbar-nav .nav-item + .nav-item {
            margin-left: 10px;
        }

        .btn-outline-warning,
        .btn-outline-success,
        .btn-outline-danger {
            border-radius: 25px;
            transition: all 0.3s ease;
            padding: 8px 20px;
        }

        .btn-outline-warning:hover,
        .btn-outline-success:hover,
        .btn-outline-danger:hover {
            background-color: #03a9f4;
            color: #fff;
            border-color: #03a9f4;
        }

        .navbar-toggler {
            border-color: #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        @media (max-width: 992px) {
            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-item {
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('catalogos.otraVista')}}">TECNM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('catalogos.submenu')}}">Catálogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('horarios.submenuhorarios')}}">Horarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('proyectoPersonales.submenuproyectos')}}">Proyectos Personales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instrumentación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tutorías</a>
                    </li>
                </ul>

                <div class="d-flex ms-2">
                    @guest
                        <a href="{{ route('register') }}" class="btn btn-outline-warning me-2">Registrarse</a>
                        <a href="{{ route('login') }}" class="btn btn-outline-success">Iniciar Sesión</a>
                    @endguest
                    @auth
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-outline-danger">Salir</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Bootstrap 5 JS (Opcional para interactividad) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
