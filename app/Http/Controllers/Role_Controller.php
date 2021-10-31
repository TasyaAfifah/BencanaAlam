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
}
