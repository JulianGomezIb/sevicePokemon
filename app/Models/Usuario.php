<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model{

    protected $table = 'usuario';
    protected $primaryKey = 'id';

    protected $hidden = ['password'];




    public static function login($email,  $password) {
        $userEkt = Usuario::where('email', '=', $email)
                            ->where('password', '=', $password)->get();

        return sizeof($userEkt)>0 ? $userEkt[0] : null;
    }


}
