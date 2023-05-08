<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //
    function index()
    {
        return view("sesi/index");
    }
   
 
    function login(Request $request)
{
    $remember = $request->has('remember_me') ? true : false;

    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ], [
        'email.required' => 'Email Wajib Diisi',
        'password.required' => 'Password Wajib Diisi',
    ]);

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::attempt($infologin, $remember)) {
        if ($remember) {
            // set cookie dengan waktu berlaku 1 hari (1440 menit)
            $cookie = cookie('remember_me', json_encode($infologin), 1440); 
            return redirect('home')->with("success", 'Berhasil Login')->cookie($cookie); // mengirimkan cookie ke browser
        } else {
            return redirect('home')->with("success", 'Berhasil Login');
        }
    } else {
        return redirect('sesi')->with('error', 'Username dan Password Salah')->cookie(); // mengirimkan cookie ke browser
    }
}


    

    function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');
    }
    function register()
    {
        return view('sesi/register');
    }
    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'

        ], [
            'name.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Silahkan Masukkan email Yang valid',
            'email.unique' => 'Email Sudah Digunakan',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Minimum 6 Karakter'
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('sesi')->with('success', 'Berhasil Registrasi');
        } else {
            // return 'gagal';
            return redirect('sesi/register')->with('error', 'Username dan Password salah');
        }
    }
}
