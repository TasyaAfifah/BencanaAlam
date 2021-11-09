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

    public function store(Request $request){
        $validatedData = $request->validate([
            'Kategori_Bencana' => 'required|min:3|max:50',
        
        ]);

       
        Kategori_Bencana::create($validatedData);

        $request->session()->flash('success','Registrasi Berhasil!');

        return redirect('/katbencana');
    }
    public function createkatbencana()
    {
        return view('dashboard.create.createkatbencana', [
           
        ]);
    }
}
