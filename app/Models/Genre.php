<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genres';
    protected $primaryKey = 'id';
    protected $keytype = 'string';
    public $incrementing = false;
    public $timestamps = false;
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movies_genres');
    }
}
