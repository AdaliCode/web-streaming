<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/movie/escape-2024', function () {
    return view('movie');
});
