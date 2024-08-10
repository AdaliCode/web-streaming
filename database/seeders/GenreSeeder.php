<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function getGenreData($name = 'korea')
        {
            $movie = new Genre();
            $movie->id = Str::slug($name);
            $movie->name = ucwords($name);
            $movie->save();
        }
        getGenreData();
        getGenreData('thriller');
        getGenreData('horror');
        getGenreData('science fiction');
    }
}
