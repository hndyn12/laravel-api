<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Sejarah',
            'Biografi',
            'Fiksi',
            'Fiksi Ilmiah',
            'Drama',
            'Puisi'
        ];

        foreach ($genres as $genre) {
            Genre::create([
                'genre' => $genre
            ]);
        }
    }
}
