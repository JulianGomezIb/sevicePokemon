<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller{


    public function createUser(Request $request){
        return UserService::createUser(new Request($request->params));
    }

    public function updateUser(Request $request){
        return UserService::updateUser($request);
    }

    public function login(Request $request){
        return UserService::login(new Request($request->params));
    }

    public function favorito(Request $request){
        return UserService::favorito(new Request($request->params));
    }

}
