@extends('layout.komponen')

{{-- <div class="w-50 center rounded border px-3 py-3 mx-auto">
    <h1>Login</h1>
    <form action="/autentikasi/login" method="POST">
      @csrf
      <div class="mb-3">
          <label for='email' class='form-label'>email</label>
          <input type="text" class="form-control" name='email'>

          <label for='password' class='form-label'>Password</label>
          <input type="password" class="form-control" name='password'>
      </div>    
      <div class="mb-3 d-grid">
        <button class="btn btn-primary" name='submit' type='submit'>Login</button>
      </div>
    </form>
</div> --}}

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h1>Register</h1>
        <form action="/autentikasi/create" method="POST">         
          @csrf
          {{-- Input nama --}}
          <div class="form-outline mb-4">
            <input value="{{ Session::get('name') }}" type="text" name="name" class="form-control form-control-lg"
              placeholder="Masukkan nama" />
            <label class="form-label" for="name">Nama</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control form-control-lg"
              placeholder="Masukkan email" />
            <label class="form-label" for="email">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name='password' class="form-control form-control-lg"
              placeholder="Masukkan password" />
            <label class="form-label"  for="password">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">

    
  </div>
</section>