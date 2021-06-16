<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('testing', function () {
    $data = Http::get('http://127.0.0.1:8000/api/user');
    dd($data->json());
});




Route::get('google', 'GoogleController@redirect')->name('google');
Route::get('google/callback', 'GoogleController@callback');
Route::group(['prefix' => 'auth'], function () {
    Route::post('register', 'Auth\RegisterController@create')->name('register');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('loginform');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', 'Auth\LoginController@logout');
});
Route::get('/home', 'HomeController@index')->name('home');
