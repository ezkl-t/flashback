<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Cookie;

class SessionController extends Controller
{
    //
    function index() {
        return view("autentikasi/index");
    }

    function login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)) {
            // return 'sukses';
            if($request->has('rememberme')) {
                Cookie::queue('rmbremail', $request->email, 4320);
                Cookie::queue('rmbrpwd', $request->password, 4320);
            }
            return redirect('menu')->with('success', Auth::user()->name . 'Telah berhasil login');
        }else{
            // return 'gagal';
            return redirect('autentikasi')->withErrors('Email atau password yang dimasukkan salah');
        }
    }
    function logout(){
        Auth::logout();
        return redirect('autentikasi')->with('success', 'Telah berhasil logout');
    }

    function register(){
        return view('autentikasi/register');
    }

    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:8',
            ]
        );
    
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ];

        User::create($data);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)) {
            // return 'sukses';
            return redirect('menu')->with('success', Auth::user()->name . 'Telah berhasil login');
        }else{
            // return 'gagal';
            return redirect('autentikasi')->withErrors('Email atau password yang dimasukkan salah');
        }
    }
}
