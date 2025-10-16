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
        Route::get('/', [UserController::class, 'index']);
        Route::get('/me', [UserController::class, 'me']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::post('/', [UserController::class, 'create']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::delete('/{id}', [UserController::class, 'destroy']);
    });

    Route::prefix('estado')->group(function () {
        Route::get('/select', [EstadoController::class, 'select']);
    });

    Route::prefix('cidade')->group(function () {
        Route::get('/select/{codigo_uf}', [CidadeController::class, 'selectPorEstado']);
    });

    Route::prefix('endereco')->group(function () {
        Route::post('/endereco', [EnderecoController::class, 'create']);
        Route::get('/{id}', [EnderecoController::class, 'show']);
    });

    Route::prefix('condominio')->group(function() {
        Route::post('/condominio', [CondominioController::class, 'create']);
        Route::get('/condominio', [CondominioController::class, 'list']);
        Route::get('/condominio/{id}', [CondominioController::class, 'show']);
        Route::put('/condominio/{id}', [CondominioController::class, 'update']);
        Route::delete('/condominio/{id}', [CondominioController::class, 'destroy']);
        Route::get('/buscar', [CondominioController::class, 'search']);

        Route::prefix('bloco')->group(function(){
            Route::post('/bloco', [BlocoController::class, 'create']);
            Route::get('/bloco', [BlocoController::class, 'list']);
            Route::put('/bloco/{id}', [BlocoController::class, 'update']);
            Route::delete('/bloco/{id}', [BlocoController::class, 'destroy']);

            Route::prefix('apartamento')->group(function(){
                Route::post('/apartamento', [ApartamentoController::class, 'create']);
                Route::get('/apartamento', [ApartamentoController::class, 'list']);
                // Keep legacy update route but prefer {id}
                Route::put('/apartamento/atualizar/{id}', [ApartamentoController::class, 'update']);
                Route::get('/apartamento/{id}', [ApartamentoController::class, 'show']);
                Route::delete('/apartamento/{id}', [ApartamentoController::class, 'destroy']);
            });
        });
    });
});
