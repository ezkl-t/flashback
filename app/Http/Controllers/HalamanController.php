<?php

namespace App\Http\Controllers;

use App\Models\materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class HalamanController extends Controller
{
    //
    public function index()
    {
        //
        $data = materi::all();
        return view('halaman/index')->with('data', $data);
    }

    public function create()
    {
        //
        return view('halaman/create');
    }
}
