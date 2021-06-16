<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if((session()->exists('status')==null)==true || session()->exists('status')==false)
            return redirect()->route('login');
        $data['locations'] = Http::withHeaders([
            'SECRET_KEY' => 'secretKey',
        ])->get('http://127.0.0.1:8000/api/cl/')->json();
        $data['campus'] = Http::withHeaders([
            'SECRET_KEY' => 'secretKey',
        ])->get('http://127.0.0.1:8000/api/campus/')->json();
        // dd($data);
        return view('home',['data' => $data]);
    }
}
