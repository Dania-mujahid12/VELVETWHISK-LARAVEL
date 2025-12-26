<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCakeController;

Route::get('/cakes', [AdminCakeController::class, 'index']);
Route::post('/cakes', [AdminCakeController::class, 'store']);
Route::put('/cakes/{id}', [AdminCakeController::class, 'update']);
Route::delete('/cakes/{id}', [AdminCakeController::class, 'destroy']);