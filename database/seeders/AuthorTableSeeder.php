<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'Ahmad Fadli', 'birthdate' => '1975-04-12'],
            ['name' => 'Siti Rahmah', 'birthdate' => '1982-08-25'],
            ['name' => 'Budi Santoso', 'birthdate' => '1993-11-14'],
            ['name' => 'Dewi Lestari', 'birthdate' => '1979-02-18'],
            ['name' => 'Taufiq Rahman', 'birthdate' => '1968-09-10']
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
