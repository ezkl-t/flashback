
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Blog Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    

    

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<div class="container-fluid">
 
    <header>
        <div class="px-3 py-2 text-bg-dark">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              </a>
    
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#" class="nav-link text-secondary">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                    Home
                  </a>
                </li>
                <li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                      Leaderboard
                    </a>
                  </li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    Profil
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><a href="/autentikasi/logout"></a></svg>
                    Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>

    
      <div class="container py-4">
       

        <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
              <div class="md-6 px-0">
                <h1 class="display-4 fst-italic">BAB 1 : Sejarah Kesultanan Banjar</h1>
                <p class="lead my-3 ">
                  Masuknya Islam ke Nusantara atau Indonesia yang dibawa oleh para pedagang Gujarat, ulama sufi dan mubaligh pada sekitar abad XVII menurut Nurcholis Madjid sudah mengalami apa yang disebut asimilasi nilai kultural. Di mana proses Islamisasi tersebut lebih menekankan upaya adaptasi ajaran Islam dengan budaya setempat. Salah satu di antara adanya adaptasi itu, lenturnya pemahaman Islam dan pengaruh ajaran agama terdahulu atas Islam, sehingga “Islam lembek” sebagai ungkapan adanya celah-celah campuraduknya ajaran Islam yang orisinil dengan agama nenek moyang (Nurcholis Madjid, 1995; 32-33). Salah satu contoh Sunan Kalijaga mencoba membawa misi Islam dalam cerita wayang ketika melakukan dakwah terhadap masyarakat pulau Jawa. Wayang sama sekali tidak pernah dikenal di dalam kultur Islam, namun kreativitas pemeluknya bisa berkembang sesuai dengan kebutuhan pragmatis serta tidak bertentangan dengan nilai-nilai ajaran Islam. Islam masuk ke Kalimantan Selatan pada masa jauh lebih belakang dibanding, misalnya, Sumatera Utara atau Avej. Diperkirakan telah ada sejumlah muslim di wilayah ini sejak awal abad ke-15, tetapi Islamisasi mencapai momentumnya baru setelah pasukan kesultanan Demak di Jawa datang ke Banjarmasin untuk membantu Pangeran Samudra dalam perjuangannya dengan kalangan elit istana kerajaan Daha. Setelah kemenangannya, Pangeran Samudra memenuhi janjinya untuk beralih memeluk agama Islam pada sekitar tahun 936 H/1526 M dan diangkat sebagai sultan yang pertama di Kasultanan Banjar. Dia diberi gelar Sultan Suriansyah atau Surian Allah oleh seorang dai Arab. (Azyumardi Azra, 1995; 251).
                </p>
              </div>
            </div>
          </main>

          <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
              <div class="md-6 px-0">
                <p class="lead my-3 ">
                    Menurut mitologi suku Maanyan (suku tertua di Kalimantan Selatan), kerajaan pertama di Borneo Selatan adalah Kerajaan Nan Sarunai yang diperkirakan wilayah kekuasaannya terbentang luas mulai dari daerah Tabalong hingga ke daerah Pasir. Keberadaan mitologi Maanyan yang menceritakan tentang masa-masa keemasan Kerajaan Nan Sarunai sebuah kerajaan purba yang dulunya mempersatukan etnis Maanyan di daerah ini dan telah melakukan hubungan dengan pulau Madagaskar. Kerajaan ini mendapat serangan dari Majapahit. sehingga sebagian rakyatnya menyingkir ke pedalaman (wilayah suku Lawangan). Salah satu peninggalan arkeologis yang berasal dari zaman ini adalah Candi Agung yang terletak di kota Amuntai. Pada tahun 1996, telah dilakukan pengujian C-14 terhadap sampel arang Candi Agung yang menghasilkan angka tahun dengan kisaran 242-226 SM (Kusmartono dan Widianto, 1998:19-20). Menilik dari angka tahun dimaksud maka Kerajaan Nan Sarunai/ Kerajaan Tabalong/Kerajaan Tanjungpuri usianya lebih tua 600 tahun dibandingkan dengan Kerajaan Kutai Martapura di Kalimantan Timur. Menurut Hikayat Sang Bima, wangsa yang menurunkan raja-raja Banjar adalah Sang Dewa bersaudara dengan wangsa yang menurunkan raja-raja Bima (Sang Bima), raja-raja Bali (Sang Kuala), raja-raja Dompu(Darmawangsa), raja-raja Gowa (Sang Rajuna) yang merupakan lima bersaudara putera-putera dari Maharaja Pandu Dewata. (Henri, dkk., 2004: 121). </p>
                
              </div>
            </div>
          </main>
          
          <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
              <div class="md-6 px-0">
                <p class="lead my-3 ">
                    Sesuai Tutur Candi (Hikayat Banjar versi II), di Kalimantan telah berdiri suatu pemerintahan dari dinasti kerajaan (keraton) yang terus menerus berlanjut hingga daerah ini digabungkan ke dalam Hindia Belanda pada 11 Juni 1860, yaitu :<br>
                    1. Keraton awal disebut Kerajaan Kuripan<br>
                    2. Keraton I disebut Kerajaan Negara Dipa<br>
                    3. Keraton II disebut Kerajaan Negara Daha<br>
                    4. Keraton III disebut Kesultanan Banjar<br>
                    5. Keraton IV disebut Kerajaan Martapura/Kayu Tangi<br>
                    6. Keraton V disebut Pagustian. Maharaja Sukarama,<br>
                    
                    Raja Negara Daha telah berwasiat agar penggantinya adalah cucunya Raden Samudera, anak dari putrinya Puteri Galuh Intan Sari. Ayah dari Raden Samudera adalah Raden Manteri Jaya, putra dari Raden Begawan, saudara Maharaja Sukarama. Wasiat tersebut menyebabkan Raden Samudera terancam keselamatannya karena para putra Maharaja Sukarama juga berambisi sebagai raja yaitu Pangeran Bagalung, Pangeran Mangkubumi dan Pangeran Tumenggung. Dibantu oleh Arya Taranggana, Pangeran Samudra melarikan diri dengan sampan ke hilir sungai Barito. Sepeninggal Sukarama, Pangeran Mangkubumi menjadi Raja Negara Daha, selanjutnya digantikan Pangeran Tumenggung yang juga putra Sukarama. Pangeran Samudra yang menyamar menjadi nelayan di daerah Balandean dan Kuin, ditampung oleh Patih Masih di rumahnya. Oleh Patih Masih bersama Patih Muhur, Patih Balitung diangkat menjadi raja yang berkedudukan di Bandarmasih. Pangeran Tumenggung melakukan penyerangan ke Bandarmasih. Pangeran Samudra dibantu Kerajaan Demak dengan kekuatan 40.000 prajurit dengan armada sebanyak 1.000 perahu yang masing-masing memuat 400 prajurit mampu menahan serangan tersebut (Slamet Muljana, 2005: 70). Akhirnya Pangeran Tumenggung bersedia menyerahkan kekuasaan Kerajaan Negara Daha kepada Pangeran Samudra. Kerajaan Negara Daha kemudian dilebur menjadi Kesultanan Banjar yang beristana di Bandarmasih. Sedangkan Pangeran Tumenggung diberi wilayah di Batang Alai. Pangeran Samudra menjadi raja pertama Kerajaan Banjar dengan gelar Sultan Suriansyah. Ia pun menjadi raja pertama yang masuk Islam dibimbing oleh Khatib Dayan.</p>

                       
                    
              </div>
            </div>
          </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
  </body>
</html>
