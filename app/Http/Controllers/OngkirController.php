<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ongkir;


class OngkirController extends Controller
{
        public function listProvinsi(){
            $hasil = Ongkir::listProvinsi();
            return $hasil;
        }
    
        public function getProvinsi($id){
            $hasil = Ongkir::getProvinsi($id);
            return $hasil;
        }
    
        public function listCity(){
            $hasil = Ongkir::listCity();
            return $hasil;
        }
    
        public function getCity($id){
            $hasil = Ongkir::getCity($id);
            return $hasil;
        }
        public function getCost($id){
            $hasil = Ongkir::getCost($id);
            return $hasil;
        }
    }
