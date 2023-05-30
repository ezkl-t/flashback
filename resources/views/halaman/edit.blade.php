@extends('layout/aplikasi')

@section('konten')
<head>
    <title>Edit Materi</title>
</head>
    <a href="/materi/" class="btn btn-secondary btn-lg"><< Batal pengeditan</a>
    <form method="post" action="{{ '/materi/'.$data->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul_bab" class="form-label">Judul</label>
            <input type="text" class="form-control" value="{{ $data->judul_bab }}" name="judul_bab" id="judul_bab">
        </div>

        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" value="{{ $data->sinopsis }}" name="sinopsis" id="sinopsis"></textarea>
        </div>
    
        <div class="mb-3">
            <label for="isi_materi" class="form-label">Isi Materi</label>
            <textarea class="form-control" value="{{ $data->isi_materi }}" name="isi_materi" id="isi_materi"></textarea>
        </div>
        @if ($data->foto)
        <div class="mb-3">
            <img style="max-width: 150px;
            max-height= 150px;" src="{{ url('img').'/'.$data->foto }}"/>
        </div>
        @endif
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection