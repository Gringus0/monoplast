<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/contact/pdf', ContactController::class . '@getPDF')->name('contact.pdf');
Route::post('/createadmin', AdminController::class . '@createAdmin')->name('admin.createAdmin');
Route::get('/', HomeController::class . '@home')->name('home');
Route::get('/about', HomeController::class . '@about')->name('about');
Route::get('/gallery', ProductController::class . '@listProductsWithGallery')->name('gallery');
Route::get('/prices', ProductController::class . '@listProductPrices')->name('productPrices');
Route::get('/contact', ContactController::class . '@index')->name('contact');
Route::get('/products', ProductController::class . '@ListProducts')->name('products');
Route::get('/actions', ProductController::class . '@ListActions')->name('actions');

Route::get('/login', AuthController::class . '@registerAndLoginForm')->name('registerAndLoginForm');


Route::post('/register', AuthController::class . '@register')->name('auth.register');
Route::post('/login', AuthController::class . '@login')->name('auth.login');
Route::post('/logout', AuthController::class . '@logout')->name('auth.logout');

Route::get('/order', OrderController::class. '@index')->name('order.index');
Route::post('/order', OrderController::class. '@store')->name('order.store');

Route::post('/contact', ContactController::class . '@sendMail')->name('contact.mail');




Route::middleware('notauth')->group(function () {
    Route::get('/admin/login', AdminController::class . '@loginForm')->name('admin.login-form');
    Route::post('/admin/login', AdminController::class . '@login')->name('admin.login');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', AdminController::class . '@index')->name('admin.index');

    Route::post('/admin/logout', AdminController::class . '@logout')->name('admin.logout');

    Route::get('/admin/gallery', AdminController::class . '@gallery')->name('admin.gallery');
    Route::get('/admin/gallery/create', AdminController::class . '@createImage')->name('admin.gallery.create');
    Route::post('/admin/gallery/store', AdminController::class . '@storeImage')->name('admin.gallery.store');
    Route::get('/admin/gallery/{id}', AdminController::class . '@showImage')->name('admin.gallery.show');
    Route::delete('/admin/gallery/delete', AdminController::class . '@destroyImage')->name('admin.gallery.delete');

    Route::get('/admin/prices', AdminController::class . '@listPrices')->name('admin.prices');
    Route::get('/get-velicine-kese', AdminController::class . '@getVelicine')->name('get.velicine.kese');
    Route::post('/admin/prices/change-price', AdminController::class . '@changePrice')->name('admin.prices.change-price');

    Route::get('/admin/actions', AdminController::class . '@listActions')->name('admin.list-actions');
    Route::get('/admin/actions/create', AdminController::class . '@createAction')->name('admin.actions.create');
    Route::post('/admin/actions/store', AdminController::class . '@storeAction')->name('admin.actions.store');
    Route::delete('/admin/actions/destroy/{id}', AdminController::class . '@destroyAction')->name('admin.actions.destroy');
    Route::get('/admin/actions/edit/{id}', AdminController::class . '@editAction')->name('admin.actions.edit');
    Route::post('/admin/actions/update/{id}', AdminController::class . '@updateAction')->name('admin.actions.update');

    Route::get('/admin/buyers', AdminController::class . '@listBuyers')->name('admin.buyers');

    Route::get('/admin/orders', AdminController::class . '@listOrders')->name('admin.orders');
    Route::get('/admin/orders/{id}', AdminController::class . '@showOrder')->name('admin.orders.show');

    Route::get('/admin/edit-bod',  AdminController::class . '@editBod')->name('admin.edit-bod');
    Route::post('/admin/edit-bod/update', AdminController::class . '@updateBod')->name('admin.edit-bod.update');


});



