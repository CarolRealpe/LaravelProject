@extends('layout')

@section('title', 'Detalles de la Categoría')

@section('contenido')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #faf8f3;
        color: #2e2e2e;
    }

    main.container {
        max-width: 700px;
        margin: 2rem auto;
        background: rgba(255, 255, 255, 0.85);
        border-radius: 1.5rem;
        padding: 2.5rem;
        box-shadow: 0 10px 25px rgba(130, 160, 110, 0.2);
        backdrop-filter: blur(8px);
    }

    .categoria-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .categoria-header h1 {
        font-weight: 700;
        color: #3d6b3d;
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .categoria-header p {
        color: #757575;
        font-size: 0.95rem;
        letter-spacing: 0.3px;
    }

    .card-categoria {
        background: linear-gradient(145deg, #ffffff, #f6f9f3);
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8d5;
    }

    .card-categoria h2 {
        font-weight: 600;
        color: #496d47;
        font-size: 1.4rem;
        margin-bottom: 0.8rem;
        border-bottom: 2px solid #d4e2c1;
        display: inline-block;
        padding-bottom: 0.3rem;
    }

    .card-categoria p {
        font-size: 1.05rem;
        color: #3a3a3a;
        line-height: 1.6;
        margin-bottom: 0;
        text-align: justify;
    }

    .acciones {
        display: flex;
        justify-content: space-between;
        margin-top: 2rem;
    }

    .btn {
        border: none;
        border-radius: 0.8rem;
        padding: 0.7rem 1.5rem;
        font-weight: 600;
        cursor: pointer;
        font-size: 1rem;
        transition: 0.3s;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-volver {
        background: linear-gradient(90deg, #97cf6b, #78b356);
        color: #fff;
    }

    .btn-volver:hover {
        background: linear-gradient(90deg, #86c258, #659b3a);
        transform: scale(1.05);
    }

    .btn-editar {
        background: linear-gradient(90deg, #ffe35c, #d3b84b);
        color: #3c3c3c;
    }

    .btn-editar:hover {
        background: linear-gradient(90deg, #ffda3a, #bba232);
        transform: scale(1.05);
    }

    .icono {
        font-size: 2rem;
        color: #7aaf5a;
        margin-bottom: 1rem;
        display: inline-block;
    }
</style>

<main class="container">
    <div class="categoria-header">
        <div class="icono">🥗</div>
        <h1>{{ $categoria->nombre }}</h1>
        <p>Detalles de la categoría registrada en el sistema</p>
    </div>

    <div class="card-categoria">
        <h2>Descripción</h2>
        <p>
            @if($categoria->descripcion)
                {{ $categoria->descripcion }}
            @else
                <em>Esta categoría no tiene descripción registrada.</em>
            @endif
        </p>
    </div>

    <div class="acciones">
        <a href="{{ route('categorias.index') }}" class="btn btn-volver">↩️ Volver</a>
        <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-editar">✏️ Editar</a>
    </div>
</main>
@endsection
