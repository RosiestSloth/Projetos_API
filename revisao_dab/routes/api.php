<?php

use App\Http\Controllers\{
    UserController,
    AuthController,
    BlocoController,
    CondominioController,
    ApartamentoController,
    CidadeController,
    EnderecoController,
    EstadoController,
};
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/cadastrar', [UserController::class, 'create']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::prefix('user')->group(function() {
        Route::get('/user', [UserController::class, 'index']);
    });

    Route::prefix('estado')->group(function () {
        Route::get('/select', [EstadoController::class, 'select']);
    });

    Route::prefix('cidade')->group(function () {
        Route::get('/select/{codigo_uf}', [CidadeController::class, 'selectPorEstado']);
    });

    Route::prefix('endereco')->group(function () {
        Route::post('/endereco', [EnderecoController::class, 'create']);
    });

    Route::prefix('condominio')->group(function() {
        Route::post('/condominio', [CondominioController::class, 'create']);
        Route::get('/condominio', [CondominioController::class, 'list']);
        Route::get('/buscar', [CondominioController::class, 'search']);

        Route::prefix('bloco')->group(function(){
            Route::post('/bloco', [BlocoController::class, 'create']);
            Route::get('/bloco', [BlocoController::class, 'list']);

            Route::prefix('apartamento')->group(function(){
                Route::post('/apartamento', [ApartamentoController::class, 'create']);
                Route::get('/apartamento', [ApartamentoController::class, 'list']);
                Route::put('/apartamento/atualizar/{uuid}', [ApartamentoController::class, 'update']);
            });
        });
    });
});
