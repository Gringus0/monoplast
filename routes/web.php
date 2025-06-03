<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class . '@home')->name('home');
Route::get('/about', HomeController::class . '@about')->name('about');
Route::get('/gallery', ProductController::class . '@listProductsWithGallery')->name('gallery');
Route::get('/prices', ProductController::class . '@listProductPrices')->name('productPrices');
Route::get('/contact', HomeController::class . '@contact')->name('contact');
Route::get('/products', ProductController::class . '@ListProducts')->name('products');

Route::get('/login', AuthController::class . '@registerAndLoginForm')->name('registerAndLoginForm');


Route::post('/register', AuthController::class . '@register')->name('auth.register');
Route::post('/login', AuthController::class . '@login')->name('auth.login');
Route::post('/logout', AuthController::class . '@logout')->name('auth.logout');

Route::get('/order', OrderController::class. '@index')->name('order.index');

