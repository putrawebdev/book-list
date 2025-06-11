<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = [
            [
                'judul' => 'Harry Potter',
                'pengarang' => 'budi anjay',
                'tahun_terbit' => '2022',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'belajar berfikir',
                'pengarang' => 'daka',
                'tahun_terbit' => '2030',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('book')->insert($book);
    }
}
