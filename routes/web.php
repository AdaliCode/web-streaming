<?php

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $latestmovies = Movie::orderBy('release', 'DESC')->get();
    // dd($latestmovies);
    $genres = Genre::with('movies')->get();
    // dd($genres);
    return view('home', compact('latestmovies', 'genres'));
});
Route::get('/movie/{id}', function ($movieID) {
    // $movie = Movie::query()->where('id', $movieID)->first();
    $movie = Movie::with('genres')->where('id', $movieID)->first();
    // dd($movie);
    return view('movie', compact('movie'));
});
