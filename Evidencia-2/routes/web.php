<?php

use App\Http\Controllers\PedidosController;
use App\Http\Controllers\UsuariosController;

// Rutas para los pedidos
Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidosController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidosController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{pedido}', [PedidosController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/{pedido}/edit', [PedidosController::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{pedido}', [PedidosController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{pedido}', [PedidosController::class, 'destroy'])->name('pedidos.destroy');

// Rutas para los usuarios
Route::resource('usuarios', UsuariosController::class);
