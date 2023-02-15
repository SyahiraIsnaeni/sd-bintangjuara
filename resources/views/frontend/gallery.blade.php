<!DOCTYPE html>
<html>
  <head>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
      <title>Galeri SD Islam Bintang Juara</title>
      <!-- add icon link -->
      <link rel = "icon" href = "{{asset('front/logo1.png')}}" type ="image/x-icon">
     <link rel="stylesheet" type="text/css" href="{{asset('front/css/stylegallery.css')}}">
     <link rel="icon" href="2.jpeg" />
      <!-- Swiper CSS -->
      <link rel="stylesheet" type="text/css" href="stylegallery.css" />
      <link rel="stylesheet" href="css/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    </head>
    <style></style>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #45b0f8;">

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
        <a class="nav-link" href="{{ 'detail-waqaf' }}">Yuk Wakaf</a>
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
    <div class="container">
      <div class="box">
        <div class="dream">
            @forelse ($galeri1 as $row)
                <img src="{{asset('uploads/'.$row->gambar_galeri) }}" />
            @empty
            @endforelse
        </div>
        <div class="dream">
            @forelse ($galeri2 as $row)
                <img src="{{asset('uploads/'.$row->gambar_galeri) }}" />
            @empty
            @endforelse
        </div>
        <div class="dream">
            @forelse ($galeri3 as $row)
                <img src="{{asset('uploads/'.$row->gambar_galeri) }}" />
            @empty
            @endforelse
        </div>
      </div>
    </div>
    @extends('frontend.footer')
  </body>
</html>
