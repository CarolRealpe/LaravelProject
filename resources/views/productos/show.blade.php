@extends('layout')

@section('title', 'Detalle del Producto')

@section('contenido')
<div class="card">
    <div class="card-header bg-info text-white">Detalles del Producto</div>
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
        <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
        <p><strong>Stock:</strong> {{ $producto->stock }}</p>
        <p><strong>Descripción:</strong> {{ $producto->descripcion ?? 'Sin descripción' }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection
