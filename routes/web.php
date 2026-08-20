<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('aboot');
});

Route::get('/login', function () {
    return view('login');
});
