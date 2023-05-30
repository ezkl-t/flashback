@extends('layout/aplikasi')

@section('konten')
<head>
    <title>Tambah materi</title>
</head>
    <a href="/materi/" class="btn btn-secondary btn-lg"><< Batal penambahan</a>
    <form method="post" action="/materi" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul_bab" class="form-label">Judul</label>
            <input type="text" class="form-control" value="{{ Session::get('judul_bab') }}" name="judul_bab" id="judul_bab">
        </div>

        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" value="{{ Session::get('sinopsis') }}" name="sinopsis" id="sinopsis"></textarea>
        </div>
    
        <div class="mb-3">
            <label for="isi_materi" class="form-label">Isi Materi</label>
            <textarea class="form-control" value="{{ Session::get('isi_materi') }}" name="isi_materi" id="isi_materi"></textarea>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection