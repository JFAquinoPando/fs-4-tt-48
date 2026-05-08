<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('home', ["productos" => Product::all()]);
});
Route::get('/home', function () {
    return view('home', ["productos" => Product::all()]);
});
Route::get('/carrito.html', function () {
    return view('carrito');
});

use App\Http\Controllers\ChatbotController;
Route::post('/chat', [ChatbotController::class, 'chat'])->name('chat');


Route::get('/productos', [ProductController::class, "index"]);

Route::post('/producto', [ProductController::class, "store"]);