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
						<li class="nav-item">
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
							<a  href="{{ route('kategorikegiatan.index') }}">
								<i class="fas fa-list-ul"></i>
								<p>Kategori Kegiatan</p>

							</a>
						</li>
                        <li class="nav-item active">
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
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Postingan</h4>
						</li>
						<li class="nav-item">
							<a href="{{ route('kegiatan.index') }}">
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
						<li class="nav-item">
                            <a href="{{ route('galeri.index') }}">
							<i class="fas fa-image"></i>
                                <p>Galeri</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('jumbotron.index') }}">
							<i class="fas fa-images"></i>
                                <p>Jumbotron</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('testimoni.index') }}">
							<i class="fas fa-comment"></i>
                                <p>Testimoni</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('waqaf.index') }}">
							<i class="fas fa-comment"></i>
                                <p>Waqaf</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('guru.index') }}">
							<i class="fas fa-comment"></i>
                                <p>Guru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('fakta.index') }}">
                                <i class="fas fa-comment"></i>
                                <p>Fakta</p>
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
