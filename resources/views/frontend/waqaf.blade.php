<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
        <title>Yuk Waqaf</title>
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
    .banner {
    background: url("{{asset('front/gedung5.png')}}") no-repeat center center;
    background-size: cover;
    padding-top: 20%;
    padding-bottom: 20%;
    color: #ffffff;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark p-md-2 fixed-top ">

    <div class="container">
      <a class="navbar-brand" href="/">
      <img src="{{asset('front/logo1.png')}}" alt="logo" height="50"><strong>&nbsp SD Islam Bintang Juara</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Beranda</a>
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
          <a class="nav-link" href="{{ 'gallery' }}">Galeri</a>
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

<!-- jumbotron -->
<section id="jumbotron">
<div class="container-fluid banner fixed-down">
    <div class="container text-start">
        <h1 class="display-5" style="text-shadow: 2px 2px 10px #000000;">Yuk Wakaf</h1>
        <h4 style="text-shadow: 2px 2px 10px #000000;">Untuk pembebasan lahan guna membangun Mushola dan mengembangkan Sekolah Dasar Islam
            Bintang Juara</h4>
            <a href="https://wa.link/nzkkz3" target="_blank">
                <button type="button" class="btn btn-primary">
                        Donasi Sekarang
                    </button>
            </a>
    </div>
</div>
</section>
<!-- akhir jumbotron -->

<!-- NoRek -->
@forelse ($waqaf as $row)
<section id="norek" style="margin-bottom :100px;">
  
    <div class="container mt-5 mb-4">
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
            <div class="row g-3 mt-5 text-center">
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
@extends('frontend.footer')

<!-- Akhir Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-primary', 'shadow');
        } else {
          nav.classList.remove('bg-primary', 'shadow');
        }
      });
    </script>
</body>

</html>
