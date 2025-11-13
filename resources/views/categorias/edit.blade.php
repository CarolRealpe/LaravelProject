@extends('layout')

@section('title', 'Editar Categoría')

@section('contenido')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #faf8f3;
        color: #2f2f2f;
    }

    main.container {
        max-width: 700px;
        margin: 2rem auto;
        background: #ffffffb3;
        border-radius: 1.2rem;
        padding: 2rem;
        backdrop-filter: blur(10px);
        box-shadow: 0 10px 25px rgba(122, 163, 97, 0.2);
    }

    h1 {
        text-align: center;
        color: #3d6b3d;
        margin-bottom: 2rem;
        font-weight: 700;
    }

    label {
        font-weight: 600;
        color: #2f2f2f;
        display: block;
        margin-bottom: 0.4rem;
    }

    input, textarea {
        width: 100%;
        border: 1.5px solid #d5e4d5;
        border-radius: 0.7rem;
        padding: 0.8rem;
        background-color: #fffef9;
        font-size: 1rem;
        color: #2f2f2f;
        transition: all 0.3s ease;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
    }

    input:focus, textarea:focus {
        outline: none;
        border-color: #89b56a;
        box-shadow: 0 0 6px rgba(110,160,90,0.3);
        background-color: #ffffff;
    }

    textarea {
        resize: none;
        min-height: 120px;
    }

    .btn-container {
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
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .btn-actualizar {
        background: linear-gradient(90deg, #ffe35c, #d3b84b);
        color: #3c3c3c;
    }

    .btn-actualizar:hover {
        background: linear-gradient(90deg, #ffda3a, #bba232);
        transform: scale(1.05);
    }

    .btn-volver {
        background: linear-gradient(90deg, #97cf6b, #78b356);
        color: #fff;
    }

    .btn-volver:hover {
        background: linear-gradient(90deg, #86c258, #659b3a);
        transform: scale(1.05);
    }
</style>

<main class="container">
    <h1>🍋 Editar Categoría</h1>

    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $categoria->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion">{{ $categoria->descripcion }}</textarea>
        </div>

        <div class="btn-container">
            <a href="{{ route('categorias.index') }}" class="btn btn-volver">↩️ Volver</a>
            <button type="submit" class="btn btn-actualizar">💾 Actualizar</button>
        </div>
    </form>
</main>
@endsection
