<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

   public static function get_all(){
    $users = DB :: table('books')->get();
    return $users;
   }
   public static function insert(Request $request ){
    $insert= DB :: table('books')->insert([
        ['nama' => $request ->nama, 'email' => $request ->nama]
    ]);
    return $insert;
   }
  

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_buku',
        'pengarang_buku',
    ];

    // Relasi ke model Peminjaman (One-to-Many)
    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'book_id');
    }
}
