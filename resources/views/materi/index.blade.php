
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Narasi | Materi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('Arsha/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('Arsha/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Arsha/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Arsha/assets/css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Narasi Sejarah</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('home.index') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href=" {{ route('logout') }}">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <br>
    <br>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Materi</h2>
                <p>Selamat datang di halaman materi website Kesultanan Banjar!</p>
                <p>Di sini, Anda akan memasuki perjalanan yang menarik ke masa lalu yang penuh dengan keajaiban sejarah
                    dan budaya.</p>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            @if (auth()->user()->level == 'admin')
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">Tambah
                                    Materi</button><br><br>
                            @endif


                            <div class="row">
                                @foreach ($items as $item)
                                    <div class="col-md-15">
                                        <div class="card border-0 mb-3 shadow">
                                            <img src="{!! asset('storage/' . $item->image) !!}" height="500px" width="200px">


                                            <div class="card-body">
                                                <h5 class="card-title">{{ $item->title }}</h5>
                                                <p class="mb-0 text-secondary">{!! htmlspecialchars_decode(substr($item->description, 0, 200)) !!}</p>
                                                <br><a href="{{ route('readmore.materi', ['id' => $item->id]) }}"
                                                    class="readmore ">Read more <i class="bi bi-arrow-right"></i></a>

                                                @if (auth()->user()->level == 'admin')
                                                    <form action="{{ route('materi.destroy', $item->id) }}"
                                                        method="POST" style="display: inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editItem{{ $item->id }}">
                                                        Edit
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Edit -->
                                    <div class="modal" id="editItem{{ $item->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Materi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('materi.update', $item->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="title">Judul Materi</label>
                                                            <input type="text" class="form-control" name="title"
                                                                id="title{{ $item->id }}"
                                                                value="{{ $item->title }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="image">Image</label>
                                                            <input type="file" accept="image/*"
                                                                class="form-control" name="image"
                                                                id="image{{ $item->id }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="description">Deskripsi</label>
                                                            <textarea name="description" id="editdesc{{ $item->id }}" cols="30" rows="5" class="form-control">{{ $item->description }}</textarea>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Edit
                                                            Materi</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script src="{{ asset('path/to/classic-editor.js') }}"></script>
                                    <!-- Pastikan Anda memuat dependensi ClassicEditor terlebih dahulu -->
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#editdesc{{ $item->id }}'))
                                            .catch(error => {
                                                console.error(error);
                                            });

                                        function openEditModal(id) {
                                            var titleInput = document.querySelector('#title' + id);
                                            var descInput = document.querySelector('#editdesc' + id);
                                            var titleValue = titleInput.value;
                                            var descValue = descInput.value;

                                            // Set value to modal form
                                            var modalTitle = document.querySelector('#editItem' + id + ' .modal-title');
                                            var modalDesc = document.querySelector('#editItem' + id + ' #editdesc' + id);
                                            modalTitle.textContent = 'Edit Artikel - ' + titleValue;
                                            modalDesc.value = descValue;
                                        }
                                    </script>
                                @endforeach
                            </div>


                            <div class="modal" id="addItem" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Materi Baru</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('materi.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="title">Judul Materi</label>
                                                    <input type="text" class="form-control" name="title"
                                                        id="title"><br>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image">Image</label>
                                                    <input type="file" accept="image/*" class="form-control"
                                                        name="image" id="image"><br>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="description">Deskripsi</label>
                                                    <textarea name="description" id="tambahdesc" cols="30" rows="5" class="form-control"></textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#tambahdesc'))
                                                            .catch(error => {
                                                                console.error(error);
                                                            });
                                                    </script>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Tambah Materi</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </section><!-- End Services Section -->
            {{-- {{ $items->links() }} --}}
        </div>
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Narasi Sejarah</h4>
                        <p>Kelompok 6</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Narasi Sejarah</h3>
                        <p>
                            Universitas Lambung Mangkurat<br>
                            Banjarmasin<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong>083112057028<br>
                            <strong>Email:</strong>narasi@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Materi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kuis</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Game</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Leaderboard</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Discover the Past, Follow our Journey! Connect with us on social media for captivating
                            historical narratives.<br>
                            Find us on Narasi Sejarah's social media accounts.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Narasi Sejarah</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">Kelompok 6</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Arsha/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Arsha/assets/js/main.js') }}"></script>

</body>

</html>
