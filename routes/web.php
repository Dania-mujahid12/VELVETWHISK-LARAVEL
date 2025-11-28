<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminCakeController;
use App\Http\Controllers\AdminCategoryController; 

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('cakes', AdminCakeController::class);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('cakes', AdminCakeController::class);
    
    Route::resource('categories', AdminCategoryController::class);
});
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/product.html', [PageController::class, 'product'])->name('product');
Route::get('/contact.html', [PageController::class, 'contact'])->name('contact');

Route::get('/cart', [PageController::class, 'cart'])->name('cart');

Route::get('/checkout.html', [PageController::class, 'checkout'])->name('checkout');


Route::get('/index.html', [PageController::class, 'home']);
Route::get('/variety.html', [PageController::class, 'variety'])->name('variety');
Route::get('/product.html', [PageController::class, 'product'])->name('product');
Route::get('/contact.html', [PageController::class, 'contact'])->name('contact');
Route::get('/checkout.html', [PageController::class, 'checkout'])->name('checkout');