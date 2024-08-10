<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $movies = Movie::all();
    return view('home', compact('movies'));
});
Route::get('/movie/{id}', function ($movieID) {
    $movie = Movie::query()->where('id', $movieID)->first();
    return view('movie', compact('movie'));
});
