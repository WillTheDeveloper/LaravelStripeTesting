<?php

use Illuminate\Support\Facades\Route;

// GET
Route::get('/', function () {
    return view('home');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/success', function () {
    return view('success');
});
Route::get('/failed', function () {
    return view('failed');
});

// POST
