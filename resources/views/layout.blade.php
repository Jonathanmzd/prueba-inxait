<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- Agregar los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h1 {
            font-family: "Open Sans", sans-serif;
            font-weight: 800;
            font-size: 4rem;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        h2 {
            font-family: "Open Sans", sans-serif;
            font-weight: 700;
            font-size: 2rem;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .img-reg {
            height: 550px;
            opacity: 0.8;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            float: right;
            margin-left: 20px;
        }

        .fondo {
            height: 300px;
            opacity: 0.8;
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
        }

        .letter-white {
            color: white;
            position: relative;
            z-index: 1;
        }

        .count {
            font-size: 40px;
            color: #333;
            background: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-family: "Open Sans", sans-serif;
            font-weight: 900;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Encabezado común -->
        <header>
            <h1 class="text-center mt-4">@yield('header')</h1>
        </header>

        <!-- Contenido específico de cada página -->
        <main>
            @yield('content')
        </main>

        <!-- Pie de página común -->
        <footer class="text-center mt-4">
            <p>© 2024 Resultados. Todos los derechos reservados.</p>
        </footer>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
