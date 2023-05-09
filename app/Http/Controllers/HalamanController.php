<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    public function index()
    {
        //
        // $data = beli_game::all();
        return view('layout/menu');
    }
}
