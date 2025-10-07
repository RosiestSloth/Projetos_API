<?php

use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\PizzaController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']); // GET - http://127.0.0.1:8000/api/users?page=1
Route::get('/users/{user}', [UserController::class, 'show']); // GET - http://127.0.0.1:8000/api/users/1
Route::post('/users', [UserController::class, 'store']); // POST - http://127.0.0.1:8000/api/users
Route::put('/users/{user}', [UserController::class, 'update']); // POST - http://127.0.0.1:8000/api/users/1
Route::delete('/users/{user}', [UserController::class, 'destroy']); // DELETE - http://127.0.0.1:8000/api/users/1

Route::get('/pizzas', [PizzaController::class, 'index']); // GET - http://127.0.0.1:8000/api/pizzas?page=1
Route::get('/pizzas/{pizza}', [PizzaController::class, 'show']); // GET - http://127.0.0.1:8000/api/pizzas/1
Route::post('/pizzas', [PizzaController::class, 'store']); // POST - http://127.0.0.1:8000/api/pizzas
Route::put('/pizzas/{pizza}', [PizzaController::class, 'update']); // POST - http://127.0.0.1:8000/api/pizzas/1
Route::delete('/pizzas/{pizza}', [PizzaController::class, 'destroy']); // DELETE - http://127.0.0.1:8000/api/pizzas/1

Route::get('/pedidos', [PedidoController::class, 'index']); // GET - http://127.0.0.1:8000/api/pedidos?page=1
Route::get('/pedidos/{pedido}', [PedidoController::class, 'show']); // GET - http://127.0.0.1:8000/api/pedidos/1
Route::post('/pedidos', [PedidoController::class, 'store']); // POST - http://127.0.0.1:8000/api/pedidos
Route::put('/pedidos/{pedido}', [PedidoController::class, 'update']); // POST - http://127.0.0.1:8000/api/pedidos/1
Route::delete('/pedidos/{pedido}', [PedidoController::class, 'destroy']); // DELETE - http://127.0.0.1:8000/api/pedidos/1