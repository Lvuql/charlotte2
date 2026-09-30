<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('pos.index');
});

// Backoffice Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class)->only(['index', 'show']);
});

// POS Routes
Route::get('/pos', [OrderController::class, 'create'])->name('pos.index');
Route::post('/pos/checkout', [OrderController::class, 'store'])->name('pos.checkout');
