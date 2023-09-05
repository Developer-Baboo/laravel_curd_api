<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index'); //fetch data
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // it is just opening create page
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store'); //actual store code

Route::get('products/{id}/edit', [ProductController::class , 'edit'])->name('products.edit'); //uska data lio

Route::put('products/{id}/update', [ProductController::class, 'update'])->name('products.update'); //actual update code

// Route::get('products/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy'); // deleting the file

Route::delete('products/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy'); // deleting the file
