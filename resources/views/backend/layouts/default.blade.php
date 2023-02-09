<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Admin SD Islam Bintang Juara</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('back/img/icon.ico')}}" type="image/x-icon"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">

	<!-- Fonts and icons -->
	<script src="{{ asset('back/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: [{{asset('back/css/fonts.min.css')}}]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('back/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('back/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project
	<link rel="stylesheet" href="{{asset('back/css/demo.css')}}"> -->
	
</head>
<body>
	<div class="wrapper">
		@include('backend.includes.header')
		<!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset('back/img/profile.png')}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
								{{ Auth::user()->name }}
									<span class="user-level">{{ Auth::user()->email }}</span>

								</span>
							</a>
							<div class="clearfix"></div>

						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="{{ route('dashboard') }}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Master Data</h4>
						</li>

						<li class="nav-item">
							<a class="nav-link active" href="{{ route('kategorikegiatan.index') }}">
								<i class="fas fa-list-ul"></i>
								<p>Kategori Kegiatan</p>

							</a>
						</li>
                        <li class="nav-item">
                            <a href="{{ route('kategoriberita.index') }}">
                                <i class="fas fa-list-ul"></i>
                                <p>Kategori Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kategoripengumuman.index') }}">
                                <i class="fas fa-list-ul"></i>
                                <p>Kategori Pengumuman</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('admin.index') }}">
							<i class="fas fa-user"></i>
                                <p>Admin</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('galeri.index') }}">
							<i class="fas fa-image"></i>
                                <p>Gambar</p>
                            </a>
                        </li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Postingan</h4>
						</li>
						<li class="nav-item">
							<a class = "nav-link active" aria-current= "page" href="{{ route('kegiatan.index') }}">
								<i class="fas fa-calendar"></i>
								<p>Kegiatan</p>
							</a>
						</li>
                        <li class="nav-item">
                            <a href="{{ route('berita.index') }}">
							<i class="fas fa-newspaper"></i>
                                <p>Berita</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('artikel.index') }}">
							<i class="fas fa-file"></i>
                                <p>Artikel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pengumuman.index') }}">
							<i class="fas fa-bullhorn"></i>
                                <p>Pengumuman</p>
                            </a>
                        </li>
                        <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                            <h4 class="text-section">Riwayat Data</h4>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('history-kegiatan.index') }}">
							<i class="fas fa-recycle"></i>
                                <p>Riwayat Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('history-berita.index') }}">
							<i class="fas fa-recycle"></i>
                                <p>Riwayat Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('history-artikel.index') }}">
							<i class="fas fa-recycle"></i>
                                <p>Riwayat Artikel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('history-pengumuman.index') }}">
							<i class="fas fa-recycle"></i>
                                <p>Riwayat Pengumuman</p>
                            </a>
                        </li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Profil Pengguna</h4>
						</li>
						<li class="nav-item">
							<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
													 <i class="fas fa-undo"></i>
													 <p> {{ __('Logout') }}</p>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				@yield('content')
			</div>
			@include('backend.includes.footer')
		</div>
	</div>
	<!--   Core JS Files   -->
@include('backend.includes.js')
@include('sweetalert::alert', ['cdn'=>"https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@yield('scripts')
</body>
</html>
