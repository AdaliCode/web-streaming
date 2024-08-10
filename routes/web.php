<?php

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $latestmovies = Movie::orderBy('release', 'DESC')->get();
    $genres = Genre::with('movies')->get();
    return view('home', compact('latestmovies', 'genres'));
});
Route::get('/movie/{id}', function ($movieID) {
    $movie = Movie::with('genres')->find($movieID);
    return view('movie', compact('movie'));
});
Route::get('/movie/genre/{id}', function ($genreID) {
    $genre = Genre::with('movies')->find($genreID);
    // dd($genre);
    return view('genre', compact('genre'));
});
