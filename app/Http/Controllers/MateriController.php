<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materi;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = materi::orderBy('id', 'asc')->paginate(6);
        return view('halaman/materi')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('halaman/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Session::flash('judul_bab', $request->nama);
        Session::flash('sinopsis', $request->nama);
        Session::flash('isi_materi', $request->nama);

        $request->validate([
            'judul_bab' => 'required',
            'sinopsis' => 'required',
            'isi_materi'=> 'required',
            'foto'=> 'required|mimes:jpeg,jpg,png',
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('img'), $foto_nama);

        $data = [
            'judul_bab' => $request->input('judul_bab'),
            'sinopsis' => $request->input('sinopsis'),
            'isi_materi'=> $request->input('isi_materi'),
            'foto'=>$foto_nama,
        ];
        materi::create($data);
        return redirect('materi')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = materi::where('id', $id)->first();
        return view('halaman/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = materi::where('id', $id)->first();
        return view('halaman.edit')->with('data', $data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'judul_bab' => 'required',
            'sinopsis' => 'required',
            'isi_materi'=> 'required',
            // 'foto'=> 'required|mimes:jpeg,jpg,png',
        ]);

        $data = [
            'judul_bab' => $request->input('judul_bab'),
            'sinopsis' => $request->input('sinopsis'),
            'isi_materi'=> $request->input('isi_materi'),
            // 'foto'=>$foto_nama, 
        ];

        if($request->hasFile('foto')) {
            $request->validate([
                'foto'=> 'mimes:jpeg,jpg,png',
            ]);
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('img'), $foto_nama);

            $data_foto = materi::where('id', $id)->first();
            File::delete(public_path('img').'/'.$data_foto->foto);

            $data = [
                'foto'=>$foto_nama
            ];
        }
        
        materi::where('id', $id)->update($data);
        return redirect('/materi')->with('success', 'Berhasil mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = materi::where('id', $id)->first();
        File::delete(public_path('img').'/'.$data->foto);
        materi::where('id', $id)->delete();
        return redirect('/materi')->with('success', 'Berhasil menghapus data');
    }
}
