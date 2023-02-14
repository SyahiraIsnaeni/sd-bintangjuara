<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Kontak</title>
       <!-- add icon link -->
     <link rel = "icon" href = "{{asset('front/logo1.png')}}" type ="image/x-icon">
     <link rel="stylesheet" type="text/css" href="style.css">
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
  <a class="navbar-brand" href="{{ 'index' }}">
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
        <a class="nav-link" href="{{ 'detail-waqaf' }}">Yuk Wakaf</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://ppdb.bintangjuara.sch.id/">PPDB</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ 'kontak' }}">Kontak</a>
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


    <!-- Kontak -->
    
    <section id="kontak">
      <div class="container">
        <div class="row mt-5">
          <div class="col">
            <h3><strong>Kontak Kami</strong></h3>
          </div>
          <div class="row">
            <div class="col-4">
                <p><i class="fas fa-home mr-3"></i> &nbsp; Jl. Dewi Sartika No.17 A, Sukorejo, Kec. Gn. Pati, Kota Semarang, 50221</p>
                <p><i class="fas fa-clock mr-3"></i> &nbsp; Senin - Sabtu (07.00 - 15.00)</p>
                <p><i class="fas fa-phone mr-3"></i> &nbsp; 0823-1493-0833</p>
                <p><i class="fas fa-phone mr-3"></i> &nbsp; 0823-1493-0833</p>
            </div>
          </div>
          </div>
        </div>
      </div>

    </section>
  <!-- Akhir Kontak -->

  <!-- Footer -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#45b0f8" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,90.7C384,107,480,181,576,197.3C672,213,768,171,864,160C960,149,1056,171,1152,165.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  <footer class="text-white" style="background-color: #45b0f8;">
    <div class="container text-md-left">
      <div class="row align-items-center">
        <div class="col-md-3 col-lg-3 col-xl-3  mt-3">
          <h5>
            <img src="{{asset('front/logo2.png')}}" alt="logo" height="50">
            <img src="{{asset('front/logo1.png')}}" alt="logo" height="50"> Bintang Juara
          </h5>
          <p>
            <i class="fas fa-home mr-3"></i> &nbsp; Jl. Dewi Sartika No.17 A, Sukorejo, Kec. Gn. Pati, Kota Semarang, 50221
          </p>
          <p>
            <a  href="#" style="text-decoration: none;">
              <strong class="text-white">Home</strong>              
            </a> .
            <a  href="#" style="text-decoration: none;">
              <strong class="text-white">Kontak Kami</strong>              
            </a> .
            <a  href="#" style="text-decoration: none;">
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
          <a href="https://www.facebook.com/sdislambintangjuara/" class="btn-floating btn-sm text-white" style="font-size:35px;">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/sdislambintangjuara/" class="btn-floating btn-sm text-white" style="font-size:35px;">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.youtube.com/channel/UCmKyv8sPPwrv-LyDaES6L8w/" class="btn-floating btn-sm text-white" style="font-size:35px;">
            <i class="fab fa-youtube"></i>
          </a>
            </li>
        </div>
        <hr class="mb-4">
        <div class="row align-items-center pb-5">
          <div class="col-md-7 col-lg-8">
            <p>
              Copyright ©2023 All rights reserved by:
              <a  href="#" style="text-decoration: none;">
                <strong class="text-white">Bintang Juara</strong>              
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Akhir Footer -->

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
