<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
      <title>Detail Artikel</title>
      <!-- add icon link -->
     <link rel = "icon" href = "{{asset('front/logo1.png')}}" type ="image/x-icon">
     <link rel="stylesheet" type="text/css" href="style.css">
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
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #45b0f8;">

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

<!-- Isi Artikel -->
<section id="isiartikel">
    <div class="container mt-4">
        <div class="row">
            <div class="col">
              <div class="text-center">
            <img src="{{asset('uploads/'.$artikel->gambar_artikel) }}" class="img-fluid" alt="events" >
            </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h2><strong>{{$artikel->judul}}</strong></h2>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <a>
                    <img src="{{asset('front/logo1.png')}}" alt="author" height="50">
                  </a>
            </div>
            <div class="col">
                <a>
                    <span id="span_1" style="font-size: large; font-weight: bold;">{{$artikel->nama_penulis}}</span>
                    <br>
                    <span id="span_2"style="font-size: small;">{{$artikel->updated_at->format('d M Y')}}</span>
                  </a>
            </div>
        </div>
        <div class="row mt-3">
            <p align="justify">
                {!! $artikel->body !!}
            </p>
        </div>
    </div>

</section>
<!-- Akhir Isi Artikel -->

<!-- Artikel lainnya -->

<section id="artikellainnya">
    <div class="container mt-5 mb-5">
        <div class="container">
            <div class="row">
                <h3><strong>What to Read Next</strong></h3>
            </div>
            <div class="row g-3">
                @forelse ($nextArtikel as $row)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="{{asset('uploads/'.$row->gambar_artikel) }}" class="card-img-top" alt="events" height="250">
                            <div class="card-body">
                                <h5 class="card-title">{{$row->judul}}</h5>
                                <p class="card-text" align="justify">{!! substr($row->body, 0, 100)!!} ...</p>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-secondary">
                                    <a class="text-black" href="{{route('detail-artikel', $row->slug)}}" style="text-decoration: none;">
                                        Selengkapnya
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
              </div>
          </div>
    </div>
</section>

<!-- Akhir Artikel lainnya -->

  <!-- Footer -->
  @extends('frontend.footer')

  <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


