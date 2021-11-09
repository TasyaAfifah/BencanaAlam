<?php

namespace App\Http\Controllers;


use App\Models\Role;
use Illuminate\Http\Request;

class Role_Controller extends Controller
{
    public function role (){
        $role = Role::all();

        return view('dashboard.tabelRole', ['role' => $role]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'Role' => 'required|min:3|max:50',
            
        ]);

       
        Role::create($validatedData);

        $request->session()->flash('success','Registrasi Berhasil!');

        return redirect('/role');
    }
    public function createrole()
    {
        return view('dashboard.create.createRole', [
           
        ]);
    }
}

