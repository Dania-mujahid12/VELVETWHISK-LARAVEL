<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// Home Page
Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/index.html', [PageController::class, 'home']);
Route::get('/variety.html', [PageController::class, 'variety'])->name('variety');
Route::get('/product.html', [PageController::class, 'product'])->name('product');
Route::get('/contact.html', [PageController::class, 'contact'])->name('contact');
Route::get('/checkout.html', [PageController::class, 'checkout'])->name('checkout');