<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class . '@home')->name('home');
Route::get('/about', HomeController::class . '@about')->name('about');
Route::get('/products', ProductController::class . '@listProductsWithGallery')->name('productsWithGallery');
Route::get('/prices', ProductController::class . '@listProductPrices')->name('productPrices');
Route::get('/contact', HomeController::class . '@contact')->name('contact');

Route::get('/register', AuthController::class . '@registerForm')->name('registerForm');
