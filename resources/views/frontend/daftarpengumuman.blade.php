<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
      <title>Daftar pengumuman</title>
      <!-- add icon link -->
     <link rel = "icon" href = "{{asset('front/logo1.png')}}" type ="image/x-icon">
     <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
     <link rel="icon" href="2.jpeg" />
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
   </head>
      <style>
      </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    </head>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark p-md-2 fixed-top ">

    <div class="container">
      <a class="navbar-brand" href="../index">
      <img src="{{asset('front/logo1.png')}}" alt="logo" height="50"><strong>&nbsp SD Islam Bintang Juara</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../detail-waqaf">Yuk Wakaf</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://ppdb.bintangjuara.sch.id/">PPDB</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../gallery">Galeri</a>
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
              <div class="carousel-caption d-none d-md-block">
                    <div class="col-12 col-md-12 col-lg-6">
                    <div class="row mb-3 ">
                        <h1 align="left" style="text-shadow: 2px 2px 10px #000000;">Daftar Pengumuman</h1>
                        <h4 align="justify" style="text-shadow: 2px 2px 10px #000000;">Kumpulan pengumuman SD Islam Bintang Juara</h4>
                    </div>
                    <div class="row mb-5">
                        <a>
                        </a>
                    </div>
                  </div>
                </div>
                <img src="{{asset('front/gedung4.png')}}" class="img-fluid1" alt="bg">
              
            </div>
        </div>
    </div>
</section>
<!-- Akhir Carousel -->

  @forelse ($pengumuman as $row)
      <section id="events">
          <div class="container mt-5">
              <div class="row fs-5">
                  <div class="col-6 col-md-3 col-lg-2">
                      <img src="{{asset('uploads/'.$row->gambar_pengumuman) }}"  class="img-fluid" alt="bg">
                  </div>
                  <div class="col-6 col-md-9 col-lg-10">
                      <a class="text-black" href="{{route('detail-pengumuman', $row->slug)}}" style="text-decoration: none;">
                          <h2><strong>{{$row->judul}}</strong></h2>
                          <p align="justify">
                              {!! substr($row->body, 0, 400)!!} ...
                          </p>
                      </a>

                  </div>
              </div>
              <hr class="mb-4">
          </div>
      </section>
  @empty
  @endforelse


  <!-- Footer -->
  @extends('frontend.footer')

  <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
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
