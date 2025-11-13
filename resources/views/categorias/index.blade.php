@extends('layout')

@section('title', 'Categorías')

@section('contenido')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #faf8f3;
        color: #2f2f2f;
    }

    main.container {
        max-width: 900px;
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
        margin-bottom: 1.5rem;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .add-btn {
        display: inline-block;
        background: linear-gradient(90deg, #ffe35c, #d3b84b);
        color: #3c3c3c;
        padding: 0.6rem 1.2rem;
        border-radius: 0.8rem;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .add-btn:hover {
        background: linear-gradient(90deg, #ffda3a, #bba232);
        transform: scale(1.05);
    }

    .category-card {
        background: #fffef8;
        border-radius: 1rem;
        padding: 1.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        margin-bottom: 1rem;
        transition: 0.3s;
    }

    .category-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    .category-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .category-name {
        font-size: 1.3rem;
        font-weight: 600;
        color: #3a5a3a;
    }

    .actions {
        display: flex;
        gap: 0.6rem;
    }

    .btn {
        border: none;
        border-radius: 0.6rem;
        padding: 0.45rem 0.9rem;
        font-size: 0.9rem;
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-ver {
        background: linear-gradient(90deg, #c2f0a2, #a6d97b);
        color: #2a3b2a;
    }

    .btn-editar {
        background: linear-gradient(90deg, #ffdf7e, #e2b94d);
        color: #3a3210;
    }

    .btn-eliminar {
        background: linear-gradient(90deg, #ff7a7a, #e24e4e);
        color: #fff;
    }

    .btn:hover {
        transform: scale(1.05);
        box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    }

    .empty {
        text-align: center;
        color: #808080;
        margin-top: 1rem;
        font-style: italic;
    }
</style>

<main class="container">
    <h1>🍃 Categorías de Productos</h1>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('categorias.create') }}" class="add-btn">➕ Nueva Categoría</a>
    </div>

    @if($categorias->count())
        @foreach($categorias as $categoria)
            <div class="category-card">
                <div class="category-header">
                    <span class="category-name">{{ $categoria->nombre }}</span>
                    <div class="actions">
                        <a href="{{ route('categorias.show', $categoria) }}" class="btn btn-ver">👁 Ver</a>
                        <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-editar"> Editar</a>
                        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-eliminar" onclick="return confirm('¿Desea eliminar la categoría {{ $categoria->nombre }}?')">🗑 Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="empty">No hay categorías registradas aún.</p>
    @endif
</main>
@endsection
