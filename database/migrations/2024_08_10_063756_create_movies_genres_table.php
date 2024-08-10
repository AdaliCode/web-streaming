<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies_genres', function (Blueprint $table) {
            $table->id();
            $table->string('genre_id', 100);
            $table->unsignedBiginteger('movie_id');
            $table->foreign('genre_id')->references('id')
                ->on('genres')->onDelete('cascade');
            $table->foreign('movie_id')->references('id')
                ->on('movies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies_genres');
    }
};
