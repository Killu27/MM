<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

<<<<<<< HEAD
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/{id}/order', [ProductController::class, 'order'])->name('products.order');
Route::get('/products', [ProductController::class, 'index']); //маршрут с методом index контроллера ProductController
=======

Route::get('/products', [ProductController::class, 'index']); //маршрут с методом index контроллера ProductController

>>>>>>> 1173d9dcbf958755acda6c919a9cd5b3a5ce95ea
