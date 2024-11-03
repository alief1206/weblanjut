<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
class Ongkir extends model {
    use HasFactory;
    public static function getProvinsi ($id){
        $response = Http :: withHeaders([
            'key' => env('RAJAONGKIR_API_KEY', false)
            ])->get('https://api.rajaongkir.com/starter/province',['id'=>$id]);
        return $response;
        }
    public static function listProvinsi(){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY', false)
        ])->get('https://api.rajaongkir.com/starter/province');
        return $response;
    }
    public static function getcity($id){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY',false)
        ])->get('https://api.rajaongkir.com/starter/city',[
            'id'=>$id
        ]);
        return $response;
    }
    public static function listCity(){
        $response = Http::withHeaders([
            'key' => env('RAJAOKIR_API_KEY', false)
        ])->get('https://api.rajaongkir.com/starter/city');
        return $response;
    }
    public static function getcost($id){
        $response = Http :: withHeaders([
            'key' => env('RAJAONGKIR_API_KEY', false)
            ])->post('https://api.rajaongkir.com/starter/cost',[
                'origin'=>$id,
                'destination'=> '2',
                'weight'=> 30000,
                'courier'=>'jne',

            ]);
        return $response;
        }
}
