@extends('layout')

@section('contenido')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600;700&display=swap');

    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f3f6fa;
        color: #1e1e1e;
    }

    main.container {
        max-width: 850px;
        background: #ffffffb5;
        padding: 2.8rem;
        border-radius: 1.5rem;
        backdrop-filter: blur(12px);
        box-shadow: 0 10px 30px rgba(0, 64, 128, 0.15);
    }

    /* === CARD === */
    .card {
        border: none;
        border-radius: 1.2rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background: linear-gradient(145deg, #ffffff, #f1f5ff);
    }

    .card-header {
        background: linear-gradient(90deg, #0078d7, #00b4ff);
        color: #fff;
        font-weight: 700;
        font-size: 1.4rem;
        text-align: center;
        padding: 1rem 1.5rem;
        letter-spacing: 0.4px;
        box-shadow: inset 0 -2px 4px rgba(255, 255, 255, 0.2);
    }

    .card-body {
        background-color: #ffffffcc;
        padding: 2rem 2.2rem;
    }

    /* === FORMULARIO === */
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

    /* === BOTONES === */
    .btn {
        font-weight: 600;
        border-radius: 0.7rem;
        transition: all 0.3s ease;
        padding: 0.55rem 1.2rem;
        font-size: 0.95rem;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-warning {
        background: linear-gradient(90deg, #ffd633, #ffb300);
        color: #1a1a1a;
        border: none;
    }

    .btn-warning:hover {
        background: linear-gradient(90deg, #ffcc00, #e6a800);
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(255, 204, 0, 0.4);
    }

    .btn-secondary {
        background: linear-gradient(90deg, #0078d7, #005a9e);
        border: none;
        color: #ffffff;
    }

    .btn-secondary:hover {
        background: linear-gradient(90deg, #005a9e, #003d73);
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 120, 215, 0.4);
    }

    /* === DETALLES VISUALES === */
    input::placeholder, textarea::placeholder {
        color: #9ca3af;
    }

    textarea {
        resize: none;
    }

    /* === EFECTO DE VIDRIO EN FORMULARIO === */
    .card-body {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(8px);
        border-radius: 1rem;
    }

    /* === ANIMACIÓN SUAVE === */
    .card, .btn, .form-control {
        transition: all 0.25s ease;
    }
</style>

<div class="card mt-4">
    <div class="card-header">Editar Vendedor</div>
    <div class="card-body">
        <form action="{{ route('vendedores.update', $vendedor) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" value="{{ $vendedor->nombre }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Cargo</label>
                <input type="text" name="cargo" value="{{ $vendedor->cargo }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" value="{{ $vendedor->telefono }}" class="form-control">
            </div>

            <div class="d-flex gap-2 justify-content-end">
                <button type="submit" class="btn btn-warning">💾 Actualizar</button>
                <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">↩️ Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
