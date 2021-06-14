<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//POST API
Route::post('registerUser','AuthController@register');
Route::post('addUser','UserController@addUser');

//Put API
Route::put('updateUser/{id}','UserController@updateUser');

//Delete API
Route::delete('deleteUser/{id}','UserController@deleteUser');

//get API
Route::get('user','UserController@getUsers');
Route::get('user/{id}','UserController@getUsersDetail');
Route::get('user/byEmail/{email}','UserController@getUsersByEmail');