@extends('layout')

@section('title', 'Lista de Productos')

@section('contenido')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600&display=swap');

    body {
        background: #e7ecf0;
        font-family: 'Segoe UI', sans-serif;
        color: #1e1e1e;
    }

    main.container {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(12px);
        border-radius: 1rem;
        padding: 2.5rem;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    h1 {
        font-weight: 600;
        color: #006e1f;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .card {
        border: none;
        border-radius: 1rem;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(8px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .card:hover {
        transform: scale(1.01);
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        background: linear-gradient(90deg, rgba(84, 209, 165, 1), rgba(168, 230, 207, 1));
        color: #2f2f2f;
        font-weight: 600;
        text-align: center;
        border-bottom: none;
        padding: 1rem 1.5rem;
        border-radius: 1rem 1rem 0 0;
    }

    .card-body {
        background: transparent;
        padding: 2rem;
    }

    .table {
        border-radius: 0.6rem;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.8);
    }

    .table thead {
        background: linear-gradient(90deg, #d9ef81, #f7f48b);
        color: #2e2e2e;
        font-weight: 600;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(248, 252, 231, 0.7);
    }

    .table-striped tbody tr:hover {
        background-color: rgba(236, 250, 200, 0.9);
        transition: 0.3s;
    }

    .btn-primary {
        background: linear-gradient(90deg, #eaff7b, #b9fbc0);
        color: #1e1e1e;
        border: 1px solid #cddc39;
        font-weight: 600;
        border-radius: 0.6rem;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #e6ff6b, #a3f7b5);
        transform: scale(1.05);
    }

    .btn-warning {
        background: linear-gradient(90deg, #fff59d, #fbc02d);
        border: none;
        color: #1e1e1e;
        font-weight: 600;
    }

    .btn-warning:hover {
        background: linear-gradient(90deg, #ffeb3b, #d4e157);
        transform: scale(1.05);
    }

    .btn-danger {
        background: linear-gradient(90deg, #ef5350, #d32f2f);
        border: none;
        font-weight: 600;
        color: white;
    }

    .btn-danger:hover {
        background: linear-gradient(90deg, #f44336, #c62828);
        transform: scale(1.05);
    }

    .alert-info {
        background: rgba(255, 255, 204, 0.8);
        border-left: 5px solid #cddc39;
        color: #5f5f5f;
        border-radius: 0.6rem;
        backdrop-filter: blur(5px);
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-primary shadow-sm">+ Nuevo</a>
</div>

<div class="card">
    <div class="card-header">Lista de Productos</div>
    <div class="card-body">
        @if($productos->count())
            <div class="table-responsive">
                <table class="table table-striped align-middle table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Descripción</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>
                                    <a href="{{ route('productos.show', $p) }}" class="text-decoration-none text-success fw-semibold">
                                        {{ $p->nombre }}
                                    </a>
                                </td>
                                <td>
                                    {{ $p->categoria ? $p->categoria->nombre : 'Sin categoría' }}
                                </td>
                                <td>
                                    {{ $p->descripcion ?: '—' }}
                                </td>
                                <td>{{ $p->stock }}</td>
                                <td>${{ number_format($p->precio, 2) }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a class="btn btn-sm btn-warning" href="{{ route('productos.edit', $p) }}">Editar</a>
                                        <form action="{{ route('productos.destroy', $p) }}" method="POST" 
                                              onsubmit="return confirm('¿Deseas eliminar {{ $p->nombre }} de la lista?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info">No hay productos registrados aún.</div>
        @endif
    </div>
</div>
@endsection
