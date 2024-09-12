<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\LanchoneteController;
use App\Http\Controllers\ProdutoController;

Route::apiResource('lanchonetes', LanchoneteController::class);
Route::apiResource('produtos', ProdutoController::class);

Route::get('produtos/categoria/{categoria}', [ProdutoController::class, 'getCategoria']);


