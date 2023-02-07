<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header " data-background-color="blue">

				<a href="{{ route('dashboard') }}" class="logo" >
				<h2 class="text-white mt-1 fw-bold">
					<img src="{{asset('back/img/logo.png')}}" alt="navbar brand" class="navbar-brand"width="51" height="51" >   Admin PAUD
				</h2>
					</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu">
						<i class="fas fa-bars"></i>
						</i>
					</span>
				</button>
				<!-- <button class="topbar-toggler more">
					<i class="icon-options-vertical">::before</i>
				</button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div> -->
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{asset('back/img/profile.png')}}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{asset('back/img/profile.jpg')}}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>{{ Auth::user()->name }}</h4>
												<p class="text-muted">{{ Auth::user()->email }}</p>
												<a href="{{ route('logout') }}" class="btn btn-xs btn-secondary btn-sm" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
													 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
                                    				 </form>
											</div>
										</div>
									</li>

								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
</div>
