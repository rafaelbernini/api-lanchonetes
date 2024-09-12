<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LanchoneteController;
use App\Http\Controllers\ProdutoController;

Route::apiResource('lanchonetes', LanchoneteController::class);
Route::apiResource('produtos', ProdutoController::class);

Route::get('produtos/categoria/{categoria}', [ProdutoController::class, 'getByCategoria']);
