<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Frontend Routes (Template)
Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/menu', function () {
    return view('frontend.menu');
})->name('menu');

Route::get('/reservation', function () {
    return view('frontend.reservation');
})->name('reservation');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
    // Google Auth
    Route::get('/auth/google', [\App\Http\Controllers\SocialiteController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('/auth/google/callback', [\App\Http\Controllers\SocialiteController::class, 'handleGoogleCallback']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Protected Routes
Route::middleware('auth')->group(function () {
    
    // Backoffice Routes (Admin)
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', function() {
            return view('admin.dashboard');
        })->name('dashboard');
        
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('orders', OrderController::class)->only(['index', 'show']);
    });

    // POS Routes (Cashier)
    Route::get('/pos', [OrderController::class, 'create'])->name('pos.index');
    Route::post('/pos/checkout', [OrderController::class, 'store'])->name('pos.checkout');

});
