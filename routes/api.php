<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => ['cors']], function () {
    Route::post('post/create/user',                  [UserController::class, 'createUser']);
    Route::post('post/login/user',                   [UserController::class, 'login']);
    Route::post('post/favoritos',                   [UserController::class, 'favorito']);
});
