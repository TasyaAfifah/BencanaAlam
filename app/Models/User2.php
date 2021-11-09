<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    use HasFactory;
    protected $table = 'user';

    public function userRole()
    {
        return $this->hasMany('App/UserRole','FK_Id_role','id_role');
    }
}