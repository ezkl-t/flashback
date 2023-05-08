@extends('layout/aplikasi')
@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="/sesi/login" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-check form-check-lg d-flex align-items-end">
                <input class="form-check-input me-2" type="checkbox" name="remember_me" value="remember_me"
                    id="remember_me">
                <label for="flexChechDefault" class="form-check-label text-gray-600" for="flexCheckDefault">Remember
                    Me</label>
            </div><br>

            <div class="mb-3 d-grid">
                <button name="submit" class="btn btn-primary">Login</button><br>
                <a class="btn btn-primary" href="sesi/register">Tidak Punya Akun? Silahkan Registrasi Disini</a>
            </div>
        </form>
    </div>
@endsection
