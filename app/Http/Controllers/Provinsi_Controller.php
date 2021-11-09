<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class Provinsi_Controller extends Controller
{
    
    public function provinsi (){
        $provinsi = Provinsi::all();

        return view('dashboard.tabelProvinsi', ['provinsi' => $provinsi]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_provinsi' => 'required|min:3|max:50',
        
        ]);

       
        Provinsi::create($validatedData);

        $request->session()->flash('success','Registrasi Berhasil!');

        return redirect('/provinsi');
    }
    public function createprovinsi()
    {
        return view('dashboard.create.createProvinsi', [
           
        ]);
    }
}

