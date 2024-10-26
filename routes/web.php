<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/{id}/order', [ProductController::class, 'order'])->name('products.order');
Route::get('/products', [ProductController::class, 'index']); //маршрут с методом index контроллера ProductController
