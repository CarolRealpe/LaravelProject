@extends('layout')

@section('title', 'Editar Producto')

@section('contenido')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600&display=swap');

    body {
        background: #e7ecf0;
        font-family: 'Segoe UI', sans-serif;
        color: #1e1e1e;
    }

    main.container {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 1rem;
        padding: 2.5rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    /* === Tarjeta === */
    .card {
        border: none;
        border-radius: 1rem;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(8px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
        transition: 0.3s ease;
    }

    .card:hover {
        transform: scale(1.01);
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        background: linear-gradient(90deg, #fff59d, #c5e1a5);
        color: #1e1e1e;
        font-weight: 600;
        text-align: center;
        padding: 1rem;
        font-size: 1.3rem;
        border-radius: 1rem 1rem 0 0;
        border-bottom: none;
    }

    .card-body {
        padding: 2rem;
        background: transparent;
    }

    /* === Inputs === */
    .form-label {
        font-weight: 600;
        color: #37474f;
    }

    .form-control {
        border-radius: 0.6rem;
        border: 1px solid #cfd8dc;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        background-color: rgba(255, 255, 255, 0.85);
    }

    .form-control:focus {
        border-color: #aee571;
        box-shadow: 0 0 6px rgba(193, 238, 127, 0.8);
        outline: none;
        background-color: #ffffff;
    }

    textarea.form-control {
        resize: none;
        min-height: 100px;
    }

    /* === Botones === */
    .btn-primary {
        background: linear-gradient(90deg, #fdfd96, #a8e6cf);
        color: #1e1e1e;
        border: none;
        border-radius: 0.6rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #e6ff6b, #a3f7b5);
        transform: scale(1.05);
    }

    .btn-secondary {
        background: linear-gradient(90deg, #cfd8dc, #b0bec5);
        color: #1e1e1e;
        border: none;
        border-radius: 0.6rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-secondary:hover {
        background: linear-gradient(90deg, #b0bec5, #90a4ae);
        transform: scale(1.05);
    }

    /* === Efecto flotante === */
    .btn {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .btn:hover {
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    }
</style>

<div class="card">
    <div class="card-header">Editar Producto</div>
    <div class="card-body">
        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="number" name="stock" value="{{ $producto->stock }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Categoría</label>
                <select name="categoria_id" class="form-control" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
