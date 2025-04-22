<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', HomeController::class . '@home')->name('home');
Route::get('/about', HomeController::class . '@about')->name('about');
Route::get('/contact', HomeController::class . '@contact')->name('contact');
