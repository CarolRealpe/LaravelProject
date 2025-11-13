@extends('layout')

@section('title', 'Crear producto')

@section('contenido')
<style>
    body {
        background-color: #f3f4ff;
        font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    main.container {
        background: #ffffff;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 0 25px rgba(98, 0, 234, 0.1);
        max-width: 900px;
    }

    h1 {
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 0.5px;
        color: #4a148c;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    form {
        background: linear-gradient(135deg, #ffffff 60%, #ede7f6 100%);
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 8px 20px rgba(103, 58, 183, 0.1);
    }

    label {
        font-weight: 600;
        color: #5e35b1;
    }

    .form-control {
        border: none;
        border-radius: 0.75rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(103, 58, 183, 0.25);
    }

    textarea.form-control {
        resize: none;
    }

    .input-group-text {
        background-color: #e8eaf6;
        border: none;
        font-weight: 600;
        color: #4527a0;
    }

    /* ======== Botones ======== */
    .btn-primary {
        background: linear-gradient(90deg, #6200ea, #3f51b5);
        border: none;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #512da8, #283593);
        transform: scale(1.05);
    }

    .btn-danger {
        background: linear-gradient(90deg, #ab47bc, #8e24aa);
        border: none;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-danger:hover {
        background: linear-gradient(90deg, #7b1fa2, #6a1b9a);
        transform: scale(1.05);
    }

    .invalid-feedback {
        font-size: 0.9rem;
    }

    .card-form {
        border: 1px solid #e0d7f8;
        border-radius: 1rem;
        padding: 2rem;
        background: #fff;
    }
</style>

<h1>Crear Producto</h1>

<form action="{{ route('productos.store') }}" method="POST" class="row g-4 card-form mx-auto">
    @csrf

    @php
        $p = $producto ?? null;
    @endphp

    <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre"
            class="form-control @error('nombre') is-invalid @enderror"
            value="{{ old('nombre', $p->nombre ?? '') }}" required
            placeholder="Ej. Zapatos deportivos">
        @error('nombre') 
            <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
    </div>

    <div class="col-md-3">
        <label for="precio" class="form-label">Precio</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" step="0.01" min="0" name="precio" id="precio"
                class="form-control @error('precio') is-invalid @enderror"
                value="{{ old('precio', $p->precio ?? '') }}" required
                placeholder="0.00">
        </div>
        @error('precio') 
            <div class="invalid-feedback d-block">{{ $message }}</div> 
        @enderror
    </div>

    <div class="col-md-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" min="0" name="stock" id="stock"
            class="form-control @error('stock') is-invalid @enderror"
            value="{{ old('stock', $p->stock ?? 0) }}" required
            placeholder="Ej. 10">
        @error('stock') 
            <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
    </div>

    <div class="col-12">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="descripcion" rows="4"
            class="form-control @error('descripcion') is-invalid @enderror"
            placeholder="Describe el producto...">{{ old('descripcion', $p->descripcion ?? '') }}</textarea>
        @error('descripcion') 
            <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
    </div>

    <div class="d-flex justify-content-center gap-3 mt-4">
        <button class="btn btn-primary px-4">Guardar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-danger px-4">Cancelar</a>
    </div>
</form>
@endsection
