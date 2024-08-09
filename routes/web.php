<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $movies = Movie::all();
    return view('home', compact('movies'));
});
Route::get('/movie/{id}', function ($movieID) {
    return view('movie');
});
