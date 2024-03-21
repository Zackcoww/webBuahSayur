<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiscountsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Dashboard and Landing

Route::get('/', function () {
    return view('landing2');
});

Route::get('/home', function () {
    return view('dashboard.home');
});

// USERS

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');


Route::resource('/users', \App\Http\Controllers\UserController::class);

Route::get('/user/edit', function () {
    return view('users.edit');
});

// Products

// Route::post('/products', [CustomerController::class, 'store'])->name('products.store');

// Route::resource('/products', \App\Http\Controllers\ProductsController::class);

Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');


Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');


Route::post('/products/store', [\App\Http\Controllers\ProductsController::class, 'store'])->name('products.store');


Route::resource('/products', \App\Http\Controllers\ProductsController::class)->except([
    'store' // Exclude store route from resource routes
]);

// CUSTOMERS

Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');

Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');

Route::delete('/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::resource('/customer', \App\Http\Controllers\CustomerController::class);

Route::get('/customers/edit', function () {
    return view('customer.edit');
});

// ORDERS

Route::post('/orders', [OrdersController::class, 'store'])->name('orders.store');

Route::get('/orders/edit/{id}', [OrdersController::class, 'edit'])->name('orders.edit');
Route::put('/orders/update/{id}', [OrdersController::class, 'update'])->name('orders.update');

Route::delete('/orders/delete/{id}', [OrdersController::class, 'destroy'])->name('orders.destroy');

Route::resource('/orders', \App\Http\Controllers\OrdersController::class);

Route::get('/orders/edit', function () {
    return view('orders.edit');
});

// Discoutns

Route::post('/discounts', [DiscountsController::class, 'store'])->name('discounts.store');

Route::get('/discounts/edit/{id}', [DiscountsController::class, 'edit'])->name('discounts.edit');
Route::put('/discounts/update/{id}', [DiscountsController::class, 'update'])->name('discounts.update');

Route::delete('/discounts/delete/{id}', [DiscountsController::class, 'destroy'])->name('discounts.destroy');

Route::resource('/discounts', \App\Http\Controllers\DiscountsController::class);

// Payments

Route::get('/payments', function () {
    return view('payments.index');
});

Route::get('/payments/create', function () {
    return view('payments.create');
});

Route::get('/payments/edit', function () {
    return view('payments.edit');
});

// Paymentsd 

Route::get('/paymentsd', function () {
    return view('paymentsd.index');
});

Route::get('/paymentsd/create', function () {
    return view('paymentsd.create');
});

Route::get('/paymentsd/edit', function () {
    return view('paymentsd.edit');
});

// inventory

Route::get('/inventory', function () {
    return view('inventory.index');
});

Route::get('/inventory/create', function () {
    return view('inventory.create');
});

Route::get('/inventory/edit', function () {
    return view('inventory.edit');
});


// Landing Page

Route::get('/shop', function () {
    return view('shop');
});



Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);

Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);