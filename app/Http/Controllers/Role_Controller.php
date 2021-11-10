<?php

namespace App\Http\Controllers;


use App\Models\Role;
use Illuminate\Support\Facades\DB;
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
    public function destroy($id)
    {
       Role::find($id)->delete();

        return redirect('/role')->with('deleterole','Delete success!');
    }
    public function edit($id)
    {
        return view('dashboard.edit.editRole', [
            'role'  => Role::find($id),
            "title" => Role::find($id)->role
        ]);
    }

    public function update(Request $request, Role $Role)
    {
      
        DB::table('role')->where('id',$request->id)->update([
            'Role' => $request->Role
        ]);

        return redirect('/role');
    }
}

