<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function getMovieData($title = 'Under paris')
        {
            $movie = new Movie();
            $movie->title = ucwords($title);
            $movie->save();
        }
        getMovieData();
        getMovieData('escape');
        getMovieData('trap');
    }
}
