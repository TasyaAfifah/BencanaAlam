<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Bencana;
use Illuminate\Support\Facades\DB;
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
    public function destroy($id)
    {
        Kategori_Bencana::find($id)->delete();

        return redirect('/katbencana')->with('deletekatbencana','Delete success!');
    }
    public function edit($id)
    {
        return view('dashboard.edit.editKatBencana', [
            'katbencana'  => Kategori_Bencana::find($id),
            "title" => Kategori_Bencana::find($id)->katbencana
        ]);
    }

    public function update(Request $request, Kategori_Bencana $Kategori_Bencana)
    {
      
        DB::table('kategori_bencana')->where('id',$request->id)->update([
            'Kategori_Bencana' => $request->Kategori_Bencana
        ]);

        return redirect('/katbencana');
    }
}
