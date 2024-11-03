<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pengguna extends Model
{
    use HasFactory;
     public static function get_all(){
         $users = DB ::tables('penggunas')->get();
         return $users;
     }
     public static function insert(Request $request){
       $insert= DB:: table('penggunas')->insert([
           ['nama' => $request ->nama, 'email' => $request ->nama],
        ]);
         return $insert;
     }
    }
    
