<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Support\Facades\DB;
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
    public function destroy($id)
    {
        Provinsi::find($id)->delete();

        return redirect('/provinsi')->with('deleteprovinsi','Delete success!');
    }
    public function edit($id)
    {
        return view('dashboard.edit.editprovinsi', [
            'provinsi'  => Provinsi::find($id),
            "title" => Provinsi::find($id)->provinsi
        ]);
    }

    public function update(Request $request, Provinsi $nama_provinsi)
    {
      
        DB::table('provinsi')->where('id',$request->id)->update([
            'nama_provinsi' => $request->nama_provinsi
        ]);

        return redirect('/provinsi');
    }

}
