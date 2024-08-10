<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function syncMovie($genreName = 'korea', $syncMovie = [2])
        {
            $genre = Genre::find($genreName);
            $genre->movies()->sync($syncMovie);
        }
        syncMovie();
        syncMovie('thriller', [1, 2, 5]);
    }
}
