<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed Penggunas
        DB::table('penggunas')->insert([
            ['nama' => 'User 1', 'email' => 'user1@example.com'],
            ['nama' => 'User 2', 'email' => 'user2@example.com'],
        ]);

        // Seed Books
        DB::table('books')->insert([
            ['nama_buku' => 'Book 1', 'pengarang_buku' => 'Author 1'],
            ['nama_buku' => 'Book 2', 'pengarang_buku' => 'Author 2'],
            ['nama_buku' => 'Book 3', 'pengarang_buku' => 'Author 3'],
            ['nama_buku' => 'Book 4', 'pengarang_buku' => 'Author 4'],
            ['nama_buku' => 'Book 5', 'pengarang_buku' => 'Author 5'],
        ]);
    }
}
