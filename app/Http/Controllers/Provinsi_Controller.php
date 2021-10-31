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
}
