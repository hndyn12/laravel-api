<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author_id',
        'genre_id',
        'published_year',
    ];

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }

    public function genres()
    {
        return $this->belongsTo(Genre::class);
    }
}
