<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $page = 'Dashboard';
    return view('dashboard.dashboard', compact('page'));
});
Route::get('/product', function () {
    $page = 'Product';
    return view('product.product', compact('page'));
});
