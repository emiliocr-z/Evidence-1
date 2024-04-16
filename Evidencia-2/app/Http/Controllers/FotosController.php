<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fotos;

class FotosController extends Controller
{
    // Método para listar todas las fotos
    public function index()
    {
        $fotos = Fotos::all();
        return view('fotos.index', compact('fotos'));
    }

    // Método para mostrar el formulario de creación de una nueva foto
    public function create()
    {
        return view('fotos.create');
    }

    // Método para almacenar una nueva foto
    public function store(Request $request)
    {
        // Lógica para validar y almacenar la nueva foto
    }

    // Método para mostrar los detalles de una foto específica
    public function show(Fotos $foto)
    {
        return view('fotos.show', compact('foto'));
    }

    // Método para mostrar el formulario de edición de una foto
    public function edit(Fotos $foto)
    {
        return view('fotos.edit', compact('foto'));
    }

    // Método para actualizar una foto existente
    public function update(Request $request, Fotos $foto)
    {
        // Lógica para validar y actualizar la foto
    }

    // Método para eliminar una foto
    public function destroy(Fotos $foto)
    {
        $foto->delete();
        return redirect()->route('fotos.index')->with('success', 'Foto eliminada correctamente');
    }
}
