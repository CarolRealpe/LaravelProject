@extends('layout')

@section('title', 'Lista de Vendedores')

@section('contenido')
<style>
.vista-vendedores {
    background: #eaf3ff;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 25px rgba(0, 80, 180, 0.15);
}

/* Título */
.vista-vendedores h1 {
    color: #0a4fa3;
    font-weight: 700;
}

/* Botón principal */
.vista-vendedores .btn-primary {
    background: linear-gradient(180deg, #0078d7, #0063b1);
    border: none;
    border-radius: 0.6rem;
    padding: 0.5rem 1rem;
    font-weight: 600;
    color: white;
    box-shadow: 0 3px 8px rgba(0, 120, 215, 0.3);
    transition: 0.2s ease;
}
.vista-vendedores .btn-primary:hover {
    background: #005a9e;
}

/* Tabla */
.vista-vendedores .table {
    background: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 120, 215, 0.1);
}

.vista-vendedores thead {
    background: #f0f6ff;
    color: #003e92;
    font-weight: 600;
}

.vista-vendedores th, 
.vista-vendedores td {
    vertical-align: middle;
    border-color: #dee2e6;
}

.vista-vendedores tbody tr:hover {
    background: #f5faff;
    transition: 0.2s ease;
}

/* Botones de acción */
.vista-vendedores .btn-outline-secondary {
    border: 1px solid #0078d7;
    color: #0078d7;
    border-radius: 6px;
    font-weight: 500;
    transition: 0.2s ease;
}
.vista-vendedores .btn-outline-secondary:hover {
    background: #0078d7;
    color: white;
}

.vista-vendedores .btn-outline-danger {
    border: 1px solid #d13438;
    color: #d13438;
    border-radius: 6px;
    font-weight: 500;
    transition: 0.2s ease;
}
.vista-vendedores .btn-outline-danger:hover {
    background: #d13438;
    color: white;
}

/* Enlaces dentro de la tabla */
.vista-vendedores a {
    color: #0078d7;
    font-weight: 500;
    text-decoration: none;
}
.vista-vendedores a:hover {
    text-decoration: underline;
}
</style>

<div class="vista-vendedores mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Vendedores</h1>
        <a href="{{ route('vendedores.create') }}" class="btn btn-primary">Nuevo</a>
    </div>

    @if($vendedores->count())
        <div class="table-responsive">
            <table class="table align-middle text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cargo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendedores as $vend)
                        <tr>
                            <td>{{ $vend->id }}</td>
                            <td><a href="{{ route('vendedores.show', $vend) }}">{{ $vend->nombre }}</a></td>
                            <td>{{ $vend->cargo }}</td>
                            <td>{{ $vend->telefono }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('vendedores.edit', $vend) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('vendedores.destroy', $vend) }}" method="POST" onsubmit="return confirm('¿Desea eliminar a {{ $vend->nombre }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-muted">No hay vendedores registrados aún.</p>
    @endif
</div>
@endsection
