@extends('layout/aplikasi')

@section('konten')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Isi Materi</title>
</head>
<body>
    <div>
        <a href="/materi" class="btn btn-secondary btn-lg"><< Kembali</a>
        <div class="text-center mx-4">
            <h1>{{$data->judul_bab}}</h1>
            <img class="mx-auto card-img-top img-thumbnail" style="max-width: 450px;max-height: 650px;" src="{{ url('img').'/'.$data->foto }}">
            <p>{{$data->isi_materi}}</p>
        </div>


        {{-- <h1>ID: {{$data->id}}</h1> --}}
        {{-- <h1>{{$data->nama}}</h1> --}}
        {{-- @if ($data->foto)
                <div class="mb-3">
                    <img style="max-width: 250px;
                    max-height= 250px;" src="{{ url('img').'/'.$data->foto }}"/>
                </div>
        @endif --}}
        {{-- <p><b>Judul</b> {{$data->judul_bab}}</p> --}}
    </div>
    @endsection