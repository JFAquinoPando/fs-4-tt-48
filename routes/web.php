<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatbotController;

/* Route::get('/', function () {
    return view('welcome');
});

test
*/

Route::get('/', function () {
    return view('home', ["productos" => Product::all()]);
});
Route::get('/home', function () {
    return view('home', ["productos" => Product::all()]);
});
Route::get('/carrito.html', function () {
    return view('carrito');
});

Route::post('/chat', [ChatbotController::class, 'chat'])->name('chat');

Route::get('/productos', [ProductController::class, "index"]);
Route::post('/producto', [ProductController::class, "store"]);

// Auth Routes
Route::get('/login', [AuthController::class, 'showEmailForm'])->name('login.email');
Route::post('/login', [AuthController::class, 'verifyEmail']);
Route::get('/login/password', [AuthController::class, 'showPasswordForm'])->name('login.password');
Route::post('/login/password', [AuthController::class, 'authenticate']);