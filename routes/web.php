<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/hitung', function () {
    return view('hitung');
});

Route::get('/default', function () {
    return view('dashboards/default');
});
