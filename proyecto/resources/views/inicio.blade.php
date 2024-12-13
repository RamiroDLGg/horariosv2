<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js'])

    <title>Proyecto Horarios</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts (Roboto, Inter) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #1f1f1f;
            color: #fff;
            font-family: 'Inter', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .hero-section {
            background-color: #2d2d2d;
            padding: 80px 20px;
            text-align: center;
            flex: 1;
            box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            color: #ffffff;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-top: 10px;
            color: #f1f1f1;
        }

        .hero-text {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 20px auto;
            color: #ddd;
        }

       /* From Uiverse.io by ZacharyCrespin */ 
button {
  transition: all 0.5s;
  font-size: 17px;
  padding: 1ch 2ch;
  background-color: white;
  color: #000;
  cursor: pointer;
  border: none;
  border-radius: 2px;
  box-shadow:
    2px 2px 0px hsl(0, 0%, 90%),
    4px 4px 0px hsl(0, 0%, 80%),
    6px 6px 0px hsl(0, 0%, 70%),
    8px 8px 0px hsl(0, 0%, 60%),
    10px 10px 0px hsl(0, 0%, 50%),
    12px 12px 0px hsl(0, 0%, 40%),
    14px 14px 0px hsl(0, 0%, 30%),
    16px 16px 0px hsl(0, 0%, 20%),
    18px 18px 0px hsl(0, 0%, 10%);
}

button:hover {
  background-color: hsl(0, 0%, 50%);
  color: #fff;
  box-shadow: none;
}

        .cta-button:hover {
            background-color: #3f3f3f;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        .card-body {
            padding: 30px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            margin-top: auto;
        }

        footer p {
            font-size: 0.9rem;
            margin: 0;
        }
    </style>
</head>

<body>

    @include('menu')

    <!-- Hero Section -->
    <section class="hero-section">
        <h1 class="hero-title">PROYECTO HORARIOS</h1>
        <h2 class="hero-subtitle">INICIA SESIÓN O REGÍSTRATE</h2>
        <p class="hero-text">
            Un sistema fácil y rápido para gestionar los horarios de tus materias. ¡Accede y empieza ya!
        </p>
       <a href="{{route('inicio2')}}"><button>Acceder al sistema</button></a> 
    </section>

    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('img/logo-tec.png') }}" width="50px" alt="Logo TEC">
                <h5 class="card-title mt-4">Información Importante</h5>
                <p class="card-text">
                    Debes iniciar sesión para poder seleccionar los semestres con sus materias respectivas.
                </p>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officia! Obcaecati, fugit rem
                    molestiae earum maxime eveniet. Consequatur maiores consectetur dolor nostrum. Ullam aut ut incidunt
                    tempora veritatis dolor quaerat.
                </p>
            </div>
        </div>
    </div>

    @yield('contenido1')

    @include('piedepagina')

    <footer>
        <p>© Ramiro de la Garza</p>
    </footer>

    <!-- Bootstrap JS (Opcional para interactividad) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
