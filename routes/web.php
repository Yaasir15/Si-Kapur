<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/perhitungan', function () {
    return view('perhitungan');
});

Route::get('/default', function () {
    return view('dashboards/default');
});
