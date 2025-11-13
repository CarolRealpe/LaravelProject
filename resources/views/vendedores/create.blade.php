@extends('layout')

@section('title', 'Registrar Vendedor')

@section('contenido')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600;700&display=swap');

    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f3f6fa;
        color: #1e1e1e;
    }

    .card {
        border: none;
        border-radius: 1.2rem;
        background: linear-gradient(145deg, #ffffff, #f1f5ff);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        padding: 2rem 2.5rem;
    }

    h1 {
        font-weight: 700;
        font-size: 1.8rem;
        color: #0078d7;
        text-shadow: 0 0 4px rgba(0, 120, 215, 0.3);
    }

    .form-label {
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 0.4rem;
    }

    .form-control {
        border-radius: 0.7rem;
        border: 1.5px solid #d0e0ff;
        background: #f7faff;
        transition: all 0.3s ease;
        padding: 0.65rem 0.8rem;
        font-size: 1rem;
        color: #1a1a1a;
    }

    .form-control:focus {
        border-color: #0078d7;
        box-shadow: 0 0 8px rgba(0, 120, 215, 0.4);
        background-color: #ffffff;
    }

    .btn {
        font-weight: 600;
        border-radius: 0.7rem;
        transition: all 0.3s ease;
        padding: 0.55rem 1.3rem;
        font-size: 0.95rem;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background: linear-gradient(90deg, #0078d7, #00b4ff);
        border: none;
        color: #fff;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #005a9e, #0085cc);
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 120, 215, 0.4);
    }

    .btn-secondary {
        background: linear-gradient(90deg, #9ea7b8, #7a869a);
        border: none;
        color: #fff;
    }

    .btn-secondary:hover {
        background: linear-gradient(90deg, #7a869a, #5a6475);
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(122, 134, 154, 0.4);
    }

    input::placeholder {
        color: #9ca3af;
    }
</style>

<h1 class="mb-4 text-center">Registrar Nuevo Vendedor</h1>

<div class="card shadow-sm">
    <form action="{{ route('vendedores.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" class="form-control"
                   placeholder="Ingrese el nombre del vendedor" required>
        </div>

        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo:</label>
            <input type="text" id="cargo" name="cargo" class="form-control"
                   placeholder="Ej: Asesor de ventas" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" class="form-control"
                   placeholder="Ej: 3001234567" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Guardar Vendedor
            </button>
        </div>
    </form>
</div>
@endsection
