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
Route::get('/jobs', function () {
    $page = 'Pekerjaan';
    return view('pekerjaan.jobs', compact('page'));
});
Route::get('/tambah-pekerjaan', function () {
    $page = 'Tambah Pekerjaan';
    return view('pekerjaan.tambah-pekerjaan', compact('page'));
});
