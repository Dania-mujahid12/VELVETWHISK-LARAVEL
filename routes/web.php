<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminCakeController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminDashboardController; 

// === 1. PUBLIC ROUTES ===
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/index.html', [PageController::class, 'home']);
Route::get('/variety.html', [PageController::class, 'variety'])->name('variety');
Route::get('/product.html', [PageController::class, 'product'])->name('product');
Route::get('/contact.html', [PageController::class, 'contact'])->name('contact');
Route::get('/checkout.html', [PageController::class, 'checkout'])->name('checkout');
Route::get('/cart.html', [PageController::class, 'cart'])->name('cart');
Route::get('/search-cakes', [PageController::class, 'search'])->name('cakes.search');

// === 2. AUTHENTICATION ROUTES ===
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Search Route

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('cakes', AdminCakeController::class);
    Route::resource('categories', AdminCategoryController::class);
});