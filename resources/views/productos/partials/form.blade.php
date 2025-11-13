@php
$p = $producto ?? null;
@endphp

<div class="col-md-6">
    <label class="form-label" for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror"
        value="{{ old('nombre', $p->nombre ?? '') }}" required>
    @error('nombre') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="col-md-3">
    <label class="form-label" for="precio">Precio</label>
    <input type="number" step="0.01" min="0" name="precio" id="precio" class="form-control @error('precio') is-invalid @enderror"
        value="{{ old('precio', $p->precio ?? '') }}" required>
    @error('precio') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="col-md-3">
    <label class="form-label" for="stock">Stock</label>
    <input type="number" min="0" name="stock" id="stock" class="form-control @error('stock') is-invalid @enderror"
        value="{{ old('stock', $p->stock ?? 0) }}" required>
    @error('stock') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="col-12">
    <label class="form-label" for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" rows="4" class="form-control @error('descripcion') is-invalid @enderror">{{ old('descripcion', $p->descripcion ?? '') }}</textarea>
    @error('descripcion') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <div class="col">
        <label c
    </div>
</div>