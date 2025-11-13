<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CMD Productos')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        nav.navbar {
            background: linear-gradient(90deg, #212529, #343a40);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .navbar .navbar-brand {
            color: #f8f9fa !important;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .navbar .navbar-brand:hover {
            color: #ffc107 !important;
            transform: scale(1.05);
        }

        main.container {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }

        .alert-success {
            border-left: 5px solid #198754;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('productos.index') }}">🛍️ Productos</a>
            <a class="navbar-brand" href="{{ route('vendedores.index') }}">👩‍💼 Vendedores</a>
            <a class="navbar-brand" href="{{ route('categorias.index') }}">📂 Categorías</a>
        </div>
    </nav>

    <main class="container my-4">
        @if(session('ok'))
            <div class="alert alert-success text-center shadow-sm">
                {{ session('ok') }}
            </div>
        @endif
        @yield('contenido')
    </main>
</body>
</html>
