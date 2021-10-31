<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Bencana;
use Illuminate\Http\Request;

class Kategori_Bencana_Controller extends Controller
{
    public function katbencana (){
        $katbencana = Kategori_Bencana::all();

        return view('dashboard.tabelKatBencana', ['katbencana' => $katbencana]);
    }
}
