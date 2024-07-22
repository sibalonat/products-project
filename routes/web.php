<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsResourceController;

Route::get('/', function () {
    return view('welcome');
});

// Route::apiResource('products', ProductsResourceController::class);

Route::get('products/all', [ProductsResourceController::class, 'index']);
Route::post('products/store', [ProductsResourceController::class, 'store']);
Route::put('products/{product}/update', [ProductsResourceController::class, 'update']);

// {product}
