<?php

namespace App\Http\Controllers;

use App\Models\DetailKorban;
use Illuminate\Http\Request;

class DetailKorban_Controller extends Controller
{
    public function korban (){
        $korban = DetailKorban::all();

        return view('dashboard.tabelKorban', ['korban' => $korban]);
    }
}