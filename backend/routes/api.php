<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaEstabelecimentoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::prefix('categoria-estabelecimento')->group(function () {
//     Route::get('/', [CategoriaEstabelecimentoController::class, 'index']);
//     Route::post('/', [CategoriaEstabelecimentoController::class, 'store']);
//     Route::put('/{id}', [CategoriaEstabelecimentoController::class, 'update']);
// });

Route::apiResource('categoria-estabelecimento', 'App\Http\Controllers\CategoriaEstabelecimentoController');

