<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Http\Request;
use App\Models\Pengguna;
class PenggunaController extends Controller
{
    public function all()
    {
        foreach (pengguna::all() as $pengguna) {
            echo $pengguna->nama;
        }
        // return $jreso->rajaongkir;
        // $pengguna = Pengguna::get();
        // return view('pengguna', ['data' => $pengguna]);
    }
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
 
        $pengguna = new pengguna;
 
        $pengguna->nama = $request->nama;
        $pengguna->email =$request->eumail;
 
        $pengguna->save();
        return redirect()->route('pengguna.index')->with('success', 'Pengguna created successfully');
 
    }

    // public function insert(Request $request){
    //     $pengguna=Pengguna::insert($request);
    //     echo $pengguna;
    // }
} 

?>