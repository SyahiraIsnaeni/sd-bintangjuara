<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
      <title>SD Islam Bintang Juara</title>
      <!-- add icon link -->
     <link rel = "icon" href = "{{asset('front/logo1.png')}}" type ="image/x-icon">
     
     <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
     
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
   </head>
      <style>
      </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
body {
    font-family: 'Roboto', sans-serif;
}
.profile-circel-image-200 img {
    width: 300px;
    height: 300px;
    border-radius: 200px;
}
.vv img {
    transition: all 0.3s ease;
    cursor: pointer;
}
.vv img:hover {
    opacity: 0.8;
    box-shadow: 0px 0px 5px 8px rgba(0,0,0,0.08);
}
      </style>
    </head>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark p-md-2 fixed-top ">

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
            <a class="nav-link active" aria-current="page" href="{{ 'index' }}">Beranda</a>
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
            @forelse ($jumbotron as $row)
          <div class="carousel-item active">
                <img src="{{asset('uploads/'.$row->foto) }}" class="img-fluid"  alt="bg" width="100%" height="100%">
          </div>
            @empty
            @endforelse
        </div>
      </div>
    </section>
    <!-- Akhir Carousel -->

    <!-- Selayang Pandang -->
    <section id="selayangpandang">
      <div class="container mt-5">
            <div class="row fs-5">
              <div class="col-8">
                  <h2>SELAYANG PANDANG</h2>
                  <p align="justify">SD ISLAM BINTANG JUARA adalah Islamic Character Based School yang mengedepankan pendidikan diniyyah seperti
                    pembiasaan ibadah, tahsin & tahfidz, serta penanaman adab dan akhlak mulia. Kami juga menerapkan pembelajaran
                    holistik integratif dengan mengintegrasikan segala aspek dan nilai-nilai dalam pendidikan seperti nilai moral, etis,
                    religius, psikologis dan sosial dalam kesatuan yang dilakukan secara menyeluruh antara jiwa dan badan serta aspek material
                    dan aspek spiritual untuk memenuhi kebutuhan esensial anak.
                  </p>
              </div>
              <div class="col">
                  <img src="{{asset('front/gedung1.jpg')}}" class="img-fluid" alt="bg">
              </div>
            </div>
      </div>
  </section>
      <!-- Akhir Selayang Pandang -->

<!-- Events, News, Videos -->
<section id="env">
      <div class="container mt-5 mb-5">
          <div class="container">
              <div class="row g-3">
                  <div class="col-12 col-md-6 col-lg-3">
                    <h3 align="center">Kegiatan</h3>
                      <div class="card">
                          @forelse ($kegiatanPrioritas as $row)
                              <img src="{{asset('uploads/'.$row->gambar_artikel) }}" class="card-img-top" alt="events" height="250">
                          @empty
                          @endforelse

                          @forelse ($kegiatan as $row)
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">
                                      <a  href="{{route('detail-kegiatan', $row->slug)}}" style="text-decoration: none;">
                                          <h6 class="card-title text-black" >{{$row->judul}}</h6>
                                      </a>
                                  </li>
                              </ul>
                          @empty
                          @endforelse
                          <div class="card-body">
                              <button type="button" class="btn btn-outline-secondary">
                                  <a class="text-black" href="{{'daftar-kegiatan'}}" style="text-decoration: none;">
                                      Selengkapnya
                                  </a>
                              </button>
                          </div>
                        </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3">
                    <h3 align="center">Berita</h3>
                      <div class="card">
                          @forelse ($beritaPrioritas as $row)
                              <img src="{{asset('uploads/'.$row->gambar_berita) }}" class="card-img-top" alt="events" height="250">
                          @empty
                          @endforelse

                          @forelse ($berita as $row)
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">
                                      <a  href="{{route('detail-berita', $row->slug)}}" style="text-decoration: none;">
                                          <h6 class="card-title text-black" >{{$row->judul}}</h6>
                                      </a>
                                  </li>
                              </ul>
                          @empty
                          @endforelse
                          <div class="card-body">
                              <button type="button" class="btn btn-outline-secondary">
                                  <a class="text-black" href="{{'daftar-berita'}}" style="text-decoration: none;">
                                      Selengkapnya
                                  </a>
                              </button>
                          </div>
                        </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3">
                    <h3 align="center">Artikel</h3>
                      <div class="card">
                          @forelse ($artikelPrioritas as $row)
                              <img src="{{asset('uploads/'.$row->gambar_artikel) }}" class="card-img-top" alt="events" height="250">
                          @empty
                          @endforelse
                          @forelse ($artikel as $row)
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">
                                      <a href="{{route('detail-artikel', $row->slug)}}" style="text-decoration: none;">
                                          <h6 class="card-title text-black">{{$row->judul}}</h6>
                                      </a>
                                  </li>
                              </ul>
                          @empty
                          @endforelse
                          <div class="card-body">
                              <button type="button" class="btn btn-outline-secondary">
                                  <a class="text-black" href="{{'daftar-artikel'}}" style="text-decoration: none;">
                                      Selengkapnya
                                  </a>
                              </button>
                          </div>
                        </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-3">
                    <h3 align="center">Pengumuman</h3>
                      <div class="card">
                          @forelse ($pengumumanPrioritas as $row)
                              <img src="{{asset('uploads/'.$row->gambar_pengumuman) }}" class="card-img-top" alt="events" height="250">
                          @empty
                          @endforelse

                          @forelse ($pengumuman as $row)
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">
                                      <a  href="{{route('detail-pengumuman', $row->slug)}}" style="text-decoration: none;">
                                          <h6 class="card-title text-black" >{{$row->judul}}</h6>
                                      </a>
                                  </li>
                              </ul>
                          @empty
                          @endforelse
                          <div class="card-body">
                            <button type="button" class="btn btn-outline-secondary">
                                <a class="text-black" href="{{'daftar-pengumuman'}}" style="text-decoration: none;">
                                    Selengkapnya
                                </a>
                            </button>
                          </div>
                        </div>
                  </div>

                </div>
            </div>
      </div>
  </section>
  <!-- Akhir Events, News, Videos -->

<!-- video yt -->
<div class="video yt">
  <div class="container mt-5">
    <div class="bintangjuaravideo">
      <div class="heading">
        <div class="text-center">
        <h1 class="title">Lebih Dekat dengan SD Islam Bintang Juara</h1>
</div>
      </div>
    </div>
    <section class="yt">
      <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="video1">
            <div class="bintangjuaravideo">
              <div class="elementor-widget-video" data-id="8b392b9" data-element_type="widget"
                data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=1GL6RJMI0S4&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}"
                data-widget_type="video.default">
                <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                  <iframe class="elementor-video" frameborder="0" allowfullscreen="1"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    title="Video Profile SD Islam Bintang Juara Semarang | Sekolah Calon Pemimpin Muslim | Sekolah Ramah Anak"
                    width="640" height="360"
                    src="https://www.youtube.com/embed/1GL6RJMI0S4?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fsd.bintangjuara.sch.id&amp;widgetid=1"
                    id="widget2"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="bintangjuaravideo">
            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
              <iframe class="elementor-video" frameborder="0" allowfullscreen="1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                title="Leadership Camp SD Islam Bintang Juara | &quot;More Than Just Adventure&quot;" width="640"
                height="360"
                src="https://www.youtube.com/embed/zvGGvawkXPo?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fsd.bintangjuara.sch.id&amp;widgetid=3"
                id="widget4"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- akhir video yt -->


    <!-- Kurikulum -->
    <section id="kurikulum">
      <section id="Fakta" >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#45b0f8" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,90.7C384,85,480,107,576,112C672,117,768,107,864,122.7C960,139,1056,181,1152,165.3C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">'
          </path>
          </svg>
        <div class="container-fluid text-white" style="background-color: #45b0f8;">
            <div class="container">
            <div class="row mb-5">
                <h2>Fokus Kurikulum Kami</h2>
            </div>
              <div class="row fs-5">
                <div class="col-12 col-md-12 col-lg-5">
                  <i class="fa-solid fa-book-open fa-2x" ></i><h3>Perpaduan Pendidikan Al Qur'an & Al Hadist dengan kurikulum KTSP 2013</h3>
                    <p align="justify">Kurikulum SD Islam Bintang Juara menggunakan acuan utama, yaitu Al-Qur’an, Hadist, serta Kurikulum SD yang berlaku dari Pemerintah
                       (KTSP Tahun 2013) serta Referensi Tahapan Perkembangan Anak dan Konsep Multiple Intelligences.</p>
                </div>
                <div class="col-2"></div>
                <div class="col-12 col-md-12 col-lg-5">
                  <i class="fa-solid fa-person-circle-check fa-2x"></i><h3>Islamic Leadership</h3>
                    <p align="justify">Membentuk leadership anak dengan membuat beragam project sesuai kurikulum dan kebutuhan lingkungan (individual maupun tim, kerjasama
                      dengan teman sekolah maupun anggota keluarga)</p>
                </div>
              </div>
              <div class="row fs-5 ">
                <div class="col-12 col-md-12 col-lg-5">
                  <i class="fa-solid fa-scale-unbalanced fa-2x"></i><h3>Materi Keislaman 60% & Materi Umum 40%</h3>
                    <p align="justify">Menitikberatkan pada materi keislaman untuk menguatkan pondasi agama anak, mengajari akidah, akhlaq & adab, serta ibadah wajib dan
                      sunnah</p>
                </div>
                <div class="col-2"></div>
                <div class="col-12 col-md-12 col-lg-5">
                    <i class="fa-sharp fa-solid fa-circle-check fa-2x"></i> <h3>Karakter & Tanggung Jawab</h3>
                    <p align="justify">Kami tidak hanya memberikan materi pendidikan secara teori, namun kami membiasakan ha-hal baik sebagai pendidikan tanggungjawab dan
                      pembentukan karakter, sehingga anak bisa menjalanankan peran di masyarakat dengan baik</p>
                </div>
              </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">\
          <path fill="#45b0f8" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,208C384,213,480,171,576,138.7C672,107,768,85,864,106.7C960,128,1056,192,1152,218.7C1248,245,1344,235,1392,229.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
          </path>
          </svg>
    </section>

    <!-- Akhir Kurikulum -->

  <!-- Fakta -->
@forelse ($fakta as $row)
  <section id="Fakta ">
    <div class="container mb-5">
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <h1>FAKTA TENTANG</h1></div>
                <h2>SD Islam Bintang Juara</h2>
            </div>
        </div>
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="{{asset('front/dummy.jpeg')}}" class="card-img-top" alt="news">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Siswa</h5>
                  <p class="card-text">{{$row->jumlah_siswa}}</p>

                </div>
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="{{asset('front/dummy.jpeg')}}" class="card-img-top" alt="videos">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Guru</h5>
                  <p class="card-text">{{$row->jumlah_guru}}</p>
                </div>
              </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="{{asset('front/dummy.jpeg')}}" class="card-img-top" alt="videos">
                <div class="card-body">
                  <h5 class="card-title">Tahun Berjalan</h5>
                  <p class="card-text">{{$row->tahun_berjalan}}</p>
                </div>

              </div>
        </div>
    </div>
    </div>
</section>
@empty
@endforelse
  <!-- Akhir Fakta -->

<!-- Gallery -->
<!-- yang lain nya  -->
<section id="lainya"  class="mt-5 mb-5">
  <div class="container mt-5 mb-5" >
  <div class="slide-container-swiper mt-5 mb-5">
    <div class="row">
      <div class="col-2">
        <h1>Galeri</h1>
      </div>
      <div class="col-10">
        <div class="main-scroll-div">
          <div>
            <button class="icon" onclick="scrollr()"><i class="fas fa-angle-double-left"></i></button>
          </div>
          <div class="cover">
            <div class="scroll-images">
                @forelse ($galeri as $row)
                    <div class="child"><img class="child-img" src="{{asset('uploads/'.$row->gambar_galeri) }}" alt="image" /></div>
                @empty
                @endforelse
            </div>
          </div>
          <div>
            <button class="icon" onclick="scrolll()"><i class="fas fa-angle-double-right"></i></button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<!-- Akhir Gallery -->

    <!-- Testimoni -->
    <section id="testimoni">
      <div class="container">
        <div class="row pt-5">
          <div class="col text-end mb-4">
            <h2>Kata Mereka</h2>
          </div>
        </div>
        <div class="row g-3">
        @forelse ($testimoni as $row)
          <div class="col-lg-4 mb-3 ">
            <div class="text-center">
          <div class="vv profile-circel-image-200">
          <img src="{{asset('uploads/'.$row->foto) }}" class="img-fluid rounded-circle" alt="Card Image">
          </div>
          </div>
          <br>
            <div class="card">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title text-center">{{ $row->nama}}</h5>
                  <div class="text-center">
                  {{$row->testimoni}}
                  </div>
                </div>
            </div>
          </div>
          @empty
          @endforelse
      </div>
    </div>
</section>
  <!-- Akhir testimoni -->

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
          </ul>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </section>
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
</html>
