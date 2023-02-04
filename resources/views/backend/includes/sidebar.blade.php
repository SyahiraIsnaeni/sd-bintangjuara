<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset('back/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
								{{ Auth::user()->name }}
									<span class="user-level">Administrator</span>

								</span>
							</a>
							<div class="clearfix"></div>


						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a class="nav-link active" href="{{ route('dashboard') }}">
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

						<!-- <li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Base</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="components/avatars.html">
											<span class="sub-item">Avatars</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Buttons</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Grid System</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Panels</span>
										</a>
									</li>
									<li>
										<a href="components/notifications.html">
											<span class="sub-item">Notifications</span>
										</a>
									</li>
									<li>
										<a href="components/sweetalert.html">
											<span class="sub-item">Sweet Alert</span>
										</a>
									</li>
									<li>
										<a href="components/font-awesome-icons.html">
											<span class="sub-item">Font Awesome Icons</span>
										</a>
									</li>
									<li>
										<a href="components/simple-line-icons.html">
											<span class="sub-item">Simple Line Icons</span>
										</a>
									</li>
									<li>
										<a href="components/flaticons.html">
											<span class="sub-item">Flaticons</span>
										</a>
									</li>
									<li>
										<a href="components/typography.html">
											<span class="sub-item">Typography</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->
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