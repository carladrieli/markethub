<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaEstabelecimentoController;
use App\Http\Controllers\CategoriaProdutoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('categoria-estabelecimento', [CategoriaEstabelecimentoController::class, 'index']);
Route::post('categoria-estabelecimento', [CategoriaEstabelecimentoController::class, 'store']);
Route::get('categoria-estabelecimento/{id}', [CategoriaEstabelecimentoController::class, 'show']);
Route::get('categoria-estabelecimento/{id}/edit', [CategoriaEstabelecimentoController::class, 'edit']);
Route::put('categoria-estabelecimento/{id}/edit', [CategoriaEstabelecimentoController::class, 'update']);
Route::delete('categoria-estabelecimento/{id}/delete', [CategoriaEstabelecimentoController::class, 'destroy']);

Route::get('categoria-produto', [CategoriaProdutoController::class, 'index']);
Route::post('categoria-produto', [CategoriaProdutoController::class, 'store']);
Route::get('categoria-produto/{id}', [CategoriaProdutoController::class, 'show']);
Route::get('categoria-produto/{id}/edit', [CategoriaProdutoController::class, 'edit']);
Route::put('categoria-produto/{id}/edit', [CategoriaProdutoController::class, 'update']);
Route::delete('categoria-produto/{id}/delete', [CategoriaProdutoController::class, 'destroy']);

