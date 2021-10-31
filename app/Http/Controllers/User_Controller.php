<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class User_Controller extends Controller
{
    public function user (){
        $user = User::all();

        return view('dashboard.tabelUser', ['user' => $user]);
    }
}