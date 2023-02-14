<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
        <title>BINTANG JUARA</title>
        <!-- add icon link -->
        <link rel = "icon" href = "{{asset('front/logo1.png')}}" type ="image/x-icon">
     <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
     <link rel="icon" href="2.jpeg" />
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous" />
    </head>
    <style>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark p-md-2 fixed-top ">

    <div class="container">
      <a class="navbar-brand" href="index.html">
      <img src="{{asset('front/logo1.png')}}" alt="logo" height="50"><strong>&nbsp SD Islam Bintang Juara</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ 'index' }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ 'profile' }}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ 'detail-waqaf' }}">Yuk Wakaf</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://ppdb.bintangjuara.sch.id/">PPDB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ 'kontak' }}">Kontak</a>
          </li>
        <li class="nav-item">
                @if (Route::has('login'))
                    @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard Admin</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @endauth
                @endif
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

<!-- Carousel -->
<section id="carouse">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('front/bg.jpeg')}}" class="img-fluid" alt="bg">
                <div class="carousel-caption d-none d-md-block">
                    <div class="col-12 col-md-12 col-lg-6">
                    <div class="row">
                        <h1 align="left">Yuk Wakaf</h1>
                        <h4 align="justify">Untuk pembebasan lahan guna membangun Mushola dan mengembangkan Sekolah Dasar Islam
                            Bintang Juara</h4>
                    </div>
                    <div class="row mt-3">
                        <a align="left"
                            href="https://api.whatsapp.com/send?phone=6282314930833&text=Assalamualaikum%20Warahmatullah%20Wabarokatuh%2C%0A%0ABerikut%20saya%20sampaikan%20kepada%20staff%20Yayasan%20Dewi%20Sartika%20Semarang%2C%20konfirmasi%20donasi%20untuk%20pengembangan%20SD%20Islam%20Bintang%20Juara.%0A%0ATerimakasih">
                            <button type="button" class="btn btn-secondary">
                                Donasi Sekarang
                            </button>
                        </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Carousel -->

<!-- yukwakaf -->
<!-- <section id="wakaf">
    <div class="container mt-5">
        <div class="col-12 col-md-12 col-lg-6">
            <div class="row">
                <h1>Yuk Wakaf</h1>
                <h4 align="justify">Untuk pembebasan lahan guna membangun Mushola dan mengembangkan Sekolah Dasar Islma
                    Bintang Juara</h4>
            </div>
            <div class="row mt-3">
                <a
                    href="https://api.whatsapp.com/send?phone=6282314930833&text=Assalamualaikum%20Warahmatullah%20Wabarokatuh%2C%0A%0ABerikut%20saya%20sampaikan%20kepada%20staff%20Yayasan%20Dewi%20Sartika%20Semarang%2C%20konfirmasi%20donasi%20untuk%20pengembangan%20SD%20Islam%20Bintang%20Juara.%0A%0ATerimakasih">
                    <button type="button" class="btn btn-outline-secondary">
                        Donasi Sekarang
                    </button>
                </a>
            </div>
        </div>
    </div>
</section> -->

<!-- akhir yukwakaf -->

<!-- NoRek -->
@forelse ($waqaf as $row)
<section id="norek">
    <div class="container mt-5 mb-5">
        <div class="row fs-5 text-center">
            <h1>{{$row->nama_bank}}</h1>
            <h3>a/n {{$row->nama_rekening}}</h3>
            <h3>{{$row->nomor_rekening}}</h3>
        </div>
    </div>
    </div>
</section>
<!-- Akhir NoRek -->



<!-- totaldonasi -->

<section id="totaldonasi">
    <div class="container">
        <div class="container text-center">
            <div class="row">
                <h1>TOTAL DONASI</h1>
            </div>
            <div class="row g-3 mt-3 text-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <i class="fa-solid fa-book-open fa-2x"></i>
                    <h3>Total Kebutuhan</h3>
                    <p>Rp {{$row->total_kebutuhan}}</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <i class="fa-solid fa-book-open fa-2x"></i>
                    <h3>Dana Terkumpul</h3>
                    <p>Rp {{$row->dana_terkumpul}}</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <i class="fa-solid fa-book-open fa-2x"></i>
                    <h3>Total Kekurangan</h3>
                    <p>Rp {{$row->total_kekurangan}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@empty
@endforelse
<!-- Akhir totaldonasi -->



<!-- Footer -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#45b0f8" fill-opacity="1"
        d="M0,160L48,138.7C96,117,192,75,288,90.7C384,107,480,181,576,197.3C672,213,768,171,864,160C960,149,1056,171,1152,165.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>
<footer class="text-white" style="background-color: #45b0f8;">
    <div class="container text-md-left">
        <div class="row align-items-center">
            <div class="col-md-3 col-lg-3 col-xl-3  mt-3">
                <h5>
                    <img src="assets/logo2.png" alt="logo" height="50">
                    <img src="assets/logo1.png" alt="logo" height="50"> Bintang Juara
                </h5>
                <p>
                    <i class="fas fa-home mr-3"></i> &nbsp; Jl. Dewi Sartika No.17 A, Sukorejo, Kec. Gn. Pati, Kota
                    Semarang, 50221
                </p>
                <p>
                    <a href="#" style="text-decoration: none;">
                        <strong class="text-white">Home</strong>
                    </a> .
                    <a href="#" style="text-decoration: none;">
                        <strong class="text-white">Kontak Kami</strong>
                    </a> .
                    <a href="#" style="text-decoration: none;">
                        <strong class="text-white">Sitemap</strong>
                    </a>
                </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3  mt-3" style="text-align: end;">
                <h5> Follow us : </h5>
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/sdislambintangjuara/" class="btn-floating btn-sm text-white"
                            style="font-size:35px;">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/sdislambintangjuara/" class="btn-floating btn-sm text-white"
                            style="font-size:35px;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCmKyv8sPPwrv-LyDaES6L8w/"
                            class="btn-floating btn-sm text-white" style="font-size:35px;">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center pb-5">
                <div class="col-md-7 col-lg-8">
                    <p>
                        Copyright ©2023 All rights reserved by:
                        <a href="#" style="text-decoration: none;">
                            <strong class="text-white">Bintang Juara</strong>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- Akhir Footer -->

<div class="lainya"></div>
<script>
    function scrolll() {
        var left = document.querySelector(".scroll-images");
        left.scrollBy(350, 0);
    }

    function scrollr() {
        var right = document.querySelector(".scroll-images");
        right.scrollBy(-350, 0);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-info', 'shadow');
        } else {
          nav.classList.remove('bg-info', 'shadow');
        }
      });
    </script>
</body>

</html>
