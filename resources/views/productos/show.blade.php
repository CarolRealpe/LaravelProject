@extends('layout')

@section('title', 'Detalle del Producto')

@section('contenido')
<style>
    body {
        background-color: #f3f4ff;
        font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
        background: #fff;
        border-radius: 1rem;
        box-shadow: 0 0 25px rgba(98, 0, 234, 0.1);
        padding: 2rem;
        max-width: 700px;
        margin: 2rem auto;
    }

    h1 {
        text-align: center;
        color: #4a148c;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
    }

    .item {
        margin-bottom: 1rem;
    }

    .label {
        font-weight: 600;
        color: #5e35b1;
    }

    .value {
        color: #333;
        margin-left: 5px;
    }

    .btn {
        border: none;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        padding: 0.5rem 1rem;
    }

    .btn-primary {
        background: linear-gradient(90deg, #6200ea, #3f51b5);
        color: #fff;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #512da8, #283593);
        transform: scale(1.05);
    }

    .btn-danger {
        background: linear-gradient(90deg, #ab47bc, #8e24aa);
        color: #fff;
    }

    .btn-danger:hover {
        background: linear-gradient(90deg, #7b1fa2, #6a1b9a);
        transform: scale(1.05);
    }
</style>

<div class="card">
    <h1>Detalle del Producto</h1>

    <div class="item">
        <span class="label">Nombre:</span>
        <span class="value">{{ $producto->nombre }}</span>
    </div>

    <div class="item">
        <span class="label">Precio:</span>
        <span class="value">${{ number_format($producto->precio, 2) }}</span>
    </div>

    <div class="item">
        <span class="label">Stock:</span>
        <span class="value">{{ $producto->stock }}</span>
    </div>

    <div class="item">
        <span class="label">Categoría:</span>
        <span class="value">
            {{ $producto->categoria ? $producto->categoria->nombre : 'Sin categoría' }}
        </span>
    </div>

    <div class="item">
        <span class="label">Descripción:</span>
        <span class="value">
            {{ $producto->descripcion ?: 'Sin descripción disponible' }}
        </span>
    </div>

    <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="{{ route('productos.index') }}" class="btn btn-danger">Volver</a>
        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-primary">Editar</a>
    </div>
</div>
@endsection
