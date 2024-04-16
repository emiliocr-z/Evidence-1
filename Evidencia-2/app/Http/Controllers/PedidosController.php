<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;

class PedidosController extends Controller
{
    // Método para listar todos los pedidos
    public function index()
    {
        $pedidos = Pedidos::all();
        return view('pedidos.index', compact('pedidos'));
    }

    // Método para mostrar el formulario de creación de un nuevo pedido
    public function create()
    {
        return view('pedidos.create');
    }

    // Método para almacenar un nuevo pedido
    public function store(Request $request)
    {
        // Lógica para validar y almacenar el nuevo pedido
    }

    // Método para mostrar los detalles de un pedido específico
    public function show(Pedidos $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

    // Método para mostrar el formulario de edición de un pedido
    public function edit(Pedidos $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    // Método para actualizar un pedido existente
    public function update(Request $request, Pedidos $pedido)
    {
        // Lógica para validar y actualizar el pedido
    }

    // Método para eliminar un pedido
    public function destroy(Pedidos $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado correctamente');
    }
}
