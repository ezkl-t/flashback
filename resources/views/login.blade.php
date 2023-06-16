{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Narasi | Log in</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">

<script nonce="c2159964-0017-469c-9abc-684a6ed136a0">(function(w,d){!function(Y,Z,_,ba){Y[_]=Y[_]||{};Y[_].executed=[];Y.zaraz={deferred:[],listeners:[]};Y.zaraz.q=[];Y.zaraz._f=function(bb){return function(){var bc=Array.prototype.slice.call(arguments);Y.zaraz.q.push({m:bb,a:bc})}};for(const bd of["track","set","debug"])Y.zaraz[bd]=Y.zaraz._f(bd);Y.zaraz.init=()=>{var be=Z.getElementsByTagName(ba)[0],bf=Z.createElement(ba),bg=Z.getElementsByTagName("title")[0];bg&&(Y[_].t=Z.getElementsByTagName("title")[0].text);Y[_].x=Math.random();Y[_].w=Y.screen.width;Y[_].h=Y.screen.height;Y[_].j=Y.innerHeight;Y[_].e=Y.innerWidth;Y[_].l=Y.location.href;Y[_].r=Z.referrer;Y[_].k=Y.screen.colorDepth;Y[_].n=Z.characterSet;Y[_].o=(new Date).getTimezoneOffset();if(Y.dataLayer)for(const bk of Object.entries(Object.entries(dataLayer).reduce(((bl,bm)=>({...bl[1],...bm[1]})),{})))zaraz.set(bk[0],bk[1],{scope:"page"});Y[_].q=[];for(;Y.zaraz.q.length;){const bn=Y.zaraz.q.shift();Y[_].q.push(bn)}bf.defer=!0;for(const bo of[localStorage,sessionStorage])Object.keys(bo||{}).filter((bq=>bq.startsWith("_zaraz_"))).forEach((bp=>{try{Y[_]["z_"+bp.slice(7)]=JSON.parse(bo.getItem(bp))}catch{Y[_]["z_"+bp.slice(7)]=bo.getItem(bp)}}));bf.referrerPolicy="origin";bf.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(Y[_])));be.parentNode.insertBefore(bf,be)};["complete","interactive"].includes(Z.readyState)?zaraz.init():Y.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="{{ route('login') }}"><b>Narasi</b>Sejarah</a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Sign in to start your session</p>
<form action="{{ route('login-proses') }}" method="post">
    @csrf
    <div class="input-group mb-3">
<input type="email" name="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
@error('email')
    <small>{{ $message }}</small>
@enderror

<div class="input-group mb-3">
<input type="password" name="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
@error('password')
    <small>{{ $message }}</small>
@enderror
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">
<button type="submit"  class="btn btn-primary btn-block">Sign In</button>
</div>

</div>
</form>


<p class="mb-1">
<a href="{{ asset('forgot-password.html') }}">I forgot my password</a>
</p>
<p class="mb-0">
<a href="{{ route('register') }}" class="text-center">Register a new membership</a>
</p>
</div>

</div>
</div>


<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js?v=3.2.0') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if($message = Session::get('failed'))
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ $message }}',
        })
    </script>
@endif

@if($message = Session::get('success'))
<script>
    Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Anda berhasil logout',
    showConfirmButton: false,
    timer: 1500
    });
</script>
@endif

</body>
</html> --}}

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Option 1: CoreUI for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <h1>Login</h1>
          <form action="{{ route('login-proses') }}" method="POST">         
            @csrf
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" class="form-control form-control-lg"
                placeholder="Masukkan email" @if (Cookie::has('rmbremail')) value="{{ Cookie::get('rmbremail') }}"
                  
                @endif>
              <label class="form-label" for="email">Email</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" name='password' class="form-control form-control-lg"
                placeholder="Masukkan password">
              <label class="form-label"  for="password">Password</label>
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2"  type="checkbox" name="rememberme" id="rememberme" @if(Cookie::has('rmbremail')) checked @endif/>
                <label class="form-check-label" for="rememberme">
                  Ingat saya
                </label>
              </div>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="{{ route('register') }}"
                  class="link-danger">Register</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if($message = Session::get('failed'))
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ $message }}',
        })
    </script>
@endif

@if($message = Session::get('success'))
<script>
    Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Anda berhasil logout',
    showConfirmButton: false,
    timer: 1500
    });
</script>
@endif