<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabController extends Controller
{
    public function index(){
        return view('materi/bab1');
    }
}
