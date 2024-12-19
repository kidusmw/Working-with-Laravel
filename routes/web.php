<?php

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Models\Team;

Route::get('/', function () {
    return view('pages.home'); // Home page
})->name('home');

Route::get('/products', function () {
    return view('pages.products', [
        'products' => Product::all()
    ]); // Products page
})->name('products');

Route::get('/teams', function () {
    return view('pages.teams', [
        'teams' => Team::all()
    ]); // Teams page
})->name('teams');

Route::get('/orders', function () {
    return view('pages.orders', [
        'orders' => Order::all()
    ]); // Teams page
})->name('orders');
