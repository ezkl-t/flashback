@extends('komponen/menu')

@section('konten')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Home</h1>

    </div>
@endsection
