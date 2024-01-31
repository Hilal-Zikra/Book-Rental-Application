<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Book::create([
            'author' => 'Qasim Ali Shah',
            'published_date' => '2021-01-01',
            'publisher' => '1',
            'pages' => 100,
        ]);

        \App\Models\Book::create([
            'author' => 'Jane Doe',
            'published_date' => '2021-01-01',
            'publisher' => '2',
            'pages' => 200,
        ]);

        \App\Models\Book::create([
            'author' => 'Zikra Infotech',
            'published_date' => '2021-01-01',
            'publisher' => '3',
            'pages' => 170,
        ]);

        \App\Models\Book::create([
            'author' => 'Admin',
            'published_date' => '2021-01-01',
            'publisher' => '4',
            'pages' => 80,
        ]);

        \App\Models\Book::create([
            'author' => 'Vallie',
            'published_date' => '2021-01-01',
            'publisher' => '1',
            'pages' => 340,
        ]);
        
    }
}
