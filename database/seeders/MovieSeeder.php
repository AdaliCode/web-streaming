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
        function getMovieData($title = 'Under paris', $release = '2024/08/10')
        {
            $movie = new Movie();
            $movie->title = ucwords($title);
            $movie->release = $release;
            $movie->save();
        }
        getMovieData();
        getMovieData('the plot', '2024/05/29');
        getMovieData('despicable me 4', '2024/06/20');
        getMovieData('saving bikini bottom', '2024/08/1');
        getMovieData('deadpool & wolverine', '2024/06/24');
    }
}
