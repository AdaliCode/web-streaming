<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function syncMovie($genreName = 'korea', $syncMovie = [2])
        {
            $genre = Genre::find(Str::slug($genreName));
            $genre->movies()->sync($syncMovie);
        }
        syncMovie();
        syncMovie('thriller', [1, 2, 5, 6]);
        syncMovie('horror', 6);
        syncMovie('science fiction', 6);
    }
}
