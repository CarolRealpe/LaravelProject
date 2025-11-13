@extends('layout')

@section('title', 'Detalle del Vendedor')

@section('contenido')
<style>
    body {
        background: linear-gradient(135deg, #e3ebff, #f0f4ff);
        font-family: 'Segoe UI Variable Display', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #2d2d2d;
    }

    .card {
        backdrop-filter: blur(18px);
        background: rgba(255, 255, 255, 0.8);
        border-radius: 1.2rem;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        border: 1px solid rgba(255,255,255,0.4);
        max-width: 600px;
        margin: 40px auto;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.12);
    }

    .card-header {
        background: linear-gradient(135deg, #0078D7, #00A4EF);
        border-radius: 1.2rem 1.2rem 0 0;
        padding: 1.2rem;
        font-weight: 600;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-header i {
        font-size: 1.4rem;
    }

    .card-body {
        padding: 2rem;
        font-size: 1.05rem;
    }

    .card-body p {
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-body i {
        color: #0078D7;
        font-size: 1.2rem;
    }

    strong {
        color: #1a1a1a;
        font-weight: 600;
    }

    .card-footer {
        background-color: transparent;
        padding: 1rem 2rem;
        display: flex;
        justify-content: flex-end;
        border-top: 1px solid rgba(0,0,0,0.05);
    }

    .btn-secondary {
        background-color: #0078D7;
        border: none;
        border-radius: 0.6rem;
        color: white;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    }

    .btn-secondary:hover {
        background-color: #005a9e;
        transform: scale(1.05);
    }

    .btn-secondary i {
        font-size: 1.1rem;
    }

    /* Animación sutil */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .card {
        animation: fadeIn 0.6s ease;
    }
</style>

<!-- Agregamos Bootstrap Icons para íconos tipo Windows -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<div class="card">
    <div class="card-header text-white">
        <i class="bi bi-person-badge"></i>
        Detalles del Vendedor
    </div>

    <div class="card-body">
        <p><i class="bi bi-person-circle"></i> <strong>Nombre:</strong> {{ $vendedor->nombre }}</p>
        <p><i class="bi bi-briefcase"></i> <strong>Cargo:</strong> {{ $vendedor->cargo }}</p>
        <p><i class="bi bi-telephone"></i> <strong>Teléfono:</strong> {{ $vendedor->telefono }}</p>
    </div>

    <div class="card-footer">
        <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left-circle"></i> Volver
        </a>
    </div>
</div>
@endsection

