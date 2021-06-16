<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator;
use Hash;
use Session;
use Auth;
use Socialite;
use App\User;
 
class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
 
    public function callback()
    {
 
        // jika user masih login lempar ke home
        if (Auth::check()) {
            return redirect('/home');
        }
 
        $oauthUser = Socialite::driver('google')->user();
        // dd($oauthUser);
        $user =  Http::withHeaders([
            'SECRET_KEY' => 'secretKey',
        ])->get('http://127.0.0.1:8000/api/user/byGoogleID/'.$oauthUser->id)->json();
        if ($user) {
            // dd($user);
            //Auth User
            session(['email' => $user['email']]);
            session(['status' => true]);
            session(['name' => $user['name']]);
            return redirect('/home');
        } else {
            // dd($user);
            $response = Http::withHeaders([
                'SECRET_KEY' => 'secretKey'
            ])->post('http://127.0.0.1:8000/api/addUser', [
                'name' => $oauthUser->name,
                'email' => $oauthUser->email,
                'password' => md5(strval(123456)),
                'google_id' => $oauthUser->id
            ]);
            $newUser = Http::withHeaders([
                'SECRET_KEY' => 'secretKey',
            ])->get('http://127.0.0.1:8000/api/user/byGoogleID/'.$oauthUser->id)->json();
            //Auth User
            $request->session()->put('email', $newUser['email']);
            $request->session()->put('status', true);
            $request->session()->put('name', $newUser['name']);
            return redirect('/home');
        }
    }
}