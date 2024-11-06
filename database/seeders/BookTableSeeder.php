<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            // book 1
            [
                'title' => 'Sejarah Nusantara',
                'author_id' => '1',
                'genre_id' => '1',
                'published_year' => '2014'
            ],
            // book 2
            [
                'title' => 'Mengenal Pahlawan Bangsa',
                'author_id' => '1',
                'genre_id' => '2',
                'published_year' => '2018'
            ],
            // book 3
            [
                'title' => 'Keluarga di Tengah Badai',
                'author_id' => '2',
                'genre_id' => '5',
                'published_year' => '2017'
            ],
            // book 4
            [
                'title' => 'Bunga di Tepi Jalan',
                'author_id' => '3',
                'genre_id' => '4',
                'published_year' => '2020'
            ],
            // book 5
            [
                'title' => 'Menjelajahi Galaksi',
                'author_id' => '3',
                'genre_id' => '3',
                'published_year' => '2021'
            ],
            // book 6
            [
                'title' => 'Planet Biru',
                'author_id' => '3',
                'genre_id' => '4',
                'published_year' => '2022'
            ],
            // book 7
            [
                'title' => 'Perjalanan Malam',
                'author_id' => '4',
                'genre_id' => '3',
                'published_year' => '2019'
            ],
            // book 8
            [
                'title' => 'Bayangan di Balik Senja',
                'author_id' => '4',
                'genre_id' => '6',
                'published_year' => '2023'
            ],
            // book 9
            [
                'title' => 'Puisi Alam Semesta',
                'author_id' => '5',
                'genre_id' => '6',
                'published_year' => '2015'
            ],
            // book 10
            [
                'title' => 'Harmoni Kehidupan',
                'author_id' => '5',
                'genre_id' => '5',
                'published_year' => '2021'
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
