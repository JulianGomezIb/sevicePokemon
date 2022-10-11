<?php

namespace App\Services;

use App\Models\ApiResponse;
use App\Models\ApiValidator;
use App\Models\Usuario;
use App\Models\Favorito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserService{

    public static function createUser($request){

        if(isset($request)){
            $user = new Usuario();

            $user->name              = $request['name'];
           $user->password          = md5($request['password']);
            $user->email             = $request['email'];
            $user->address         = $request['address'];
            $user->city             = $request['city'];
            $user->birthdate             = $request['birthdate'];

            $data = $user->save();



        } else {

            $data = null;
        }

        return $data;
    }



    public static function login($request) {

        if (isset($request)) {
            $data = Usuario::login($request['email'], md5($request['password']) );
        } else {
            $data = null;
        }

        return is_null($data) ? null:$data;
    }
    
     public static function favorito($request){

        if(isset($request)){
            $fav = new Favorito();

            $fav->id_usuario              = $request['id_usuario'];
            $fav->ref_api          = $request['ref_api'];

            $data = $fav->save();

        } else {
            $data = null;
        }
        return $data;
    }

}
