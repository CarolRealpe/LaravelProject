<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedoresController extends Controller
{
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedores.index', compact('vendedores'));
    }

    public function create()
    {
        return view('vendedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'cargo' => 'required|string|max:100',
            'telefono' => 'nullable|string|max:20',
        ]);

        Vendedor::create([
            'nombre' => $request->nombre,
            'cargo' => $request->cargo,
            'telefono' => $request->telefono,
        ]);

        return redirect()->route('vendedores.index')
                         ->with('ok', 'Vendedor creado.');
    }

    public function show(Vendedor $vendedor)
    {
        return view('vendedores.show', compact('vendedor'));
    }

    public function edit(Vendedor $vendedor)
    {
        return view('vendedores.edit', compact('vendedor'));
    }

    public function update(Request $request, Vendedor $vendedor)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'cargo' => 'required|string|max:100',
            'telefono' => 'nullable|string|max:20',
        ]);

        $vendedor->update($request->all());

        return redirect()->route('vendedores.index')
                         ->with('success', 'Vendedor actualizado correctamente.');
    }

    public function destroy(Vendedor $vendedor)
    {
        $vendedor->delete();

        return redirect()->route('vendedores.index')
                         ->with('Vendedor eliminado.');
    }
}
