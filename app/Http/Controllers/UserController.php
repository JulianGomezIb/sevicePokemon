<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller{


    public function createUser(Request $request){
        return UserService::createUser($request);
    }

    public function updateUser(Request $request){
        return UserService::updateUser($request);
    }

    public function login(Request $request){
        return UserService::login($request);
    }

}
