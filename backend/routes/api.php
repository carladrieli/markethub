<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaEstabelecimentoController;
use App\Http\Controllers\CategoriaProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;

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

Route::get('estabelecimento', [EstabelecimentoController::class, 'index']);
Route::post('estabelecimento', [EstabelecimentoController::class, 'store']);
Route::get('estabelecimento/{id}', [EstabelecimentoController::class, 'show']);
Route::get('estabelecimento/{id}/edit', [EstabelecimentoController::class, 'edit']);
Route::put('estabelecimento/{id}/edit', [EstabelecimentoController::class, 'update']);
Route::delete('estabelecimento/{id}/delete', [EstabelecimentoController::class, 'destroy']);

Route::get('cliente', [ClienteController::class, 'index']);
Route::post('cliente', [ClienteController::class, 'store']);
Route::get('cliente/{id}', [ClienteController::class, 'show']);
Route::get('cliente/{id}/edit', [ClienteController::class, 'edit']);
Route::put('cliente/{id}/edit', [ClienteController::class, 'update']);
Route::delete('cliente/{id}/delete', [ClienteController::class, 'destroy']);


Route::get('produto', [ProdutoController::class, 'index']);
Route::post('produto', [ProdutoController::class, 'store']);
Route::get('produto/{id}', [ProdutoController::class, 'show']);
Route::get('produto/{id}/edit', [ProdutoController::class, 'edit']);
Route::put('produto/{id}/edit', [ProdutoController::class, 'update']);
Route::delete('produto/{id}/delete', [ProdutoController::class, 'destroy']);

Route::get('pedido', [PedidoController::class, 'index']);
Route::post('pedido', [PedidoController::class, 'store']);
Route::get('pedido/{id}', [PedidoController::class, 'show']);
Route::get('pedido/{id}/edit', [PedidoController::class, 'edit']);
Route::put('pedido/{id}/edit', [PedidoController::class, 'update']);
Route::delete('pedido/{id}/delete', [PedidoController::class, 'destroy']);
