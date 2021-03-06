<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $guarded = ['id'];
    public function userRole()
    {
        return $this->hasMany('App/UserRole','FK_Id_role','id_role');
    }
}
