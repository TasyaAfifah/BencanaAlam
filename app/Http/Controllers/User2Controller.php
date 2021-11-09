<?php

namespace App\Http\Controllers;
use App\Models\User2;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    public function user (){
        return view('dashboard.tabelUser', [
            $user2 = User2::all(),
            'user2' => $user2
        ]);
    }
}
