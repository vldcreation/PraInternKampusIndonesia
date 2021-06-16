<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        //call api
        $response = Http::withHeaders([
            'SECRET_KEY' => 'secretKey',
        ])->get('http://127.0.0.1:8000/api/user/byEmail/'.$request->input('email'));
        // dd($response->json());
        $obj = $response->json();

        if ($obj['password'] == md5($request->input('password'))) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            // dd(array($obj['password'],md5($request->input('password'))));
            $request->session()->put('email', $obj['email']);
            $request->session()->put('status', true);
            $request->session()->put('name', $obj['name']);
            return redirect()->route('home');
 
        } else { // false
 
            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('loginform');
        }
    }

    public function logout(){
        session()->flush();
        // redirect to homepage
        return redirect('/');
    }
}
