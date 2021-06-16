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


//User
//get API
Route::get('user','UserController@getUsers');
Route::get('user/{id}','UserController@getUsersDetail');
Route::get('user/byEmail/{email}','UserController@getUsersByEmail');

//POST API
Route::post('addUser','UserController@addUser');

//Put API
Route::put('updateUser/{id}','UserController@updateUser');

//Delete API
Route::delete('deleteUser/{id}','UserController@deleteUser');


// Campus Location
//get API
Route::get('cl','CampusLocationController@getCL');
Route::get('cl/{id}','CampusLocationController@getCLDetail');

//POST API
Route::post('addCL','CampusLocationController@addCL');

//Put API
Route::put('updateCL/{id}','CampusLocationController@updateCL');

//Delete API
Route::delete('deleteCL/{id}','CampusLocationController@deleteCL');

// Campus Details
//get API
Route::get('campus','CampusDetailController@getCampus');
Route::get('campus/{id}','CampusDetailController@getCampusDetail');

//POST API
Route::post('addCampus','CampusDetailController@addCampus');

//Put API
Route::put('updateCampus/{id}','CampusDetailController@updateCampus');

//Delete API
Route::delete('deleteCampus/{id}','CampusDetailController@deleteCampus');

// Fakultas
//get API
Route::get('fakultas','FakultasController@getFakultas');
Route::get('fakultas/{id}','FakultasController@getFakultasDetail');

//POST API
Route::post('addFakultas','FakultasController@addFakultas');

//Put API
Route::put('updateFakultas/{id}','FakultasController@updateFakultas');

//Delete API
Route::delete('deleteFakultas/{id}','FakultasController@deleteFakultas');

// Program Study
//get API
Route::get('ps','ProgramStudyController@getPS');
Route::get('ps/{id}','ProgramStudyController@getPSDetail');

//POST API
Route::post('addPS','ProgramStudyController@addPS');

//Put API
Route::put('updatePS/{id}','ProgramStudyController@updatePS');

//Delete API
Route::delete('deletePS/{id}','ProgramStudyController@deletePS');