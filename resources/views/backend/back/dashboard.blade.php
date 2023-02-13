@extends('backend.layouts.default')
@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Dashboard Admin SD</h2>
			</div>
		</div>
	</div>
</div>

<div class="page-inner mt--5">
	<div class="row">
		<div class="col-sm-6 col-md-2">
			<div class="card card-stats card-round">
				<div class="card-body ">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-primary bubble-shadow-small">
								<i class="fas fa-users"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category">User</p>
                                <div class="card-title">{{$admin->COUNT('id')}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-2">
			<div class="card card-stats card-round">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-info bubble-shadow-small">
							<i class="fas fa-calendar"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category">Kegiatan</p>
                                <div class="card-title">{{$kegiatan->COUNT('id')}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-2">
			<div class="card card-stats card-round">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-success bubble-shadow-small">
							<i class="fas fa-newspaper"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category">Berita</p>
                                <div class="card-title">{{$berita->COUNT('id')}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-2">
			<div class="card card-stats card-round">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-secondary bubble-shadow-small">
							<i class="fas fa-file"></i>

							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category">Artikel</p>
                                <div class="card-title">{{$artikel->COUNT('id')}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-2">
			<div class="card card-stats card-round">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-danger bubble-shadow-small">
							<i class="fas fa-bullhorn"></i>

							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category">Pengumuman</p>
                                <div class="card-title">{{$pengumuman->COUNT('id')}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-2">
			<div class="card card-stats card-round">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-warning bubble-shadow-small">
							<i class="fas fa-image"></i>
							</div>
						</div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <p class="card-category">Gambar</p>
                                <div class="card-title">{{$galeri->COUNT('id')}}</div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Draf Kegiatan</div>
					</div>

				</div>
				<div class="card-body">
				@forelse ($drafKegiatan as $row)
					<div class="row fs-5">
						<div class="col-2 col-md-2 col-lg-2 ml-3 mt-2 mb-2">
							<img src="{{asset('uploads/'.$row->gambar_artikel) }}"  class="img-fluid" alt="bg" width="90">
						</div>
						<div class="col-8 col-md-8 col-lg-8 mt-3 mb-3">
							<a class="text-black" style="text-decoration: none; font-size: small; ">
								<h5>{{$row->judul}}</h5>
							</a>
							
						</div>
						<div class="col-1 col-md-1 col-lg-1 mt-3 mb-3">
						<a href="{{route('kegiatan.edit', $row->id) }}"
                                           class="btn btn-warning btn-sm">Edit</a>
						</div>
					</div>
					@empty
					@endforelse
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Draf Berita</div>
					</div>
				</div>
				<div class="card-body">
				@forelse ($drafBerita as $row)
					<div class="row fs-5">
						<div class="col-2 col-md-2 col-lg-2 ml-3 mt-2 mb-2">
							<img src="{{asset('uploads/'.$row->gambar_berita) }}"  class="img-fluid" alt="bg" width="90">
						</div>
						<div class="col-8 col-md-8 col-lg-8 mt-3 mb-3">
							<a class="text-black" style="text-decoration: none; font-size: small; ">
								<h5>{{$row->judul}}</h5>
							</a>
							
						</div>
						<div class="col-1 col-md-1 col-lg-1 mt-3 mb-3">
						<a href="{{route('berita.edit', $row->id) }}"
                                           class="btn btn-warning btn-sm">Edit</a>
						</div>
					</div>
					@empty
					@endforelse
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Draf Artikel</div>
					</div>
				</div>
				<div class="card-body">
				@forelse ($drafArtikel as $row)
					<div class="row fs-5">
						<div class="col-2 col-md-2 col-lg-2 ml-3 mt-2 mb-2">
							<img src="{{asset('uploads/'.$row->gambar_artikel) }}"  class="img-fluid" alt="bg" width="90">
						</div>
						<div class="col-8 col-md-8 col-lg-8 mt-3 mb-3">
							<a class="text-black" style="text-decoration: none; font-size: small; ">
								<h5>{{$row->judul}}</h5>
							</a>
							
						</div>
						<div class="col-1 col-md-1 col-lg-1 mt-3 mb-3">
						<a href="{{route('artikel.edit', $row->id) }}"
                                           class="btn btn-warning btn-sm">Edit</a>
						</div>
					</div>
					@empty
					@endforelse
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Draf Pengumuman</div>
					</div>
				</div>
				<div class="card-body">
				@forelse ($drafPengumuman as $row)
					<div class="row fs-5">
						<div class="col-2 col-md-2 col-lg-2 ml-3 mt-2 mb-2">
							<img src="{{asset('uploads/'.$row->gambar_pengumuman) }}"  class="img-fluid" alt="bg" width="90">
						</div>
						<div class="col-8 col-md-8 col-lg-8 mt-3 mb-3">
							<a class="text-black" style="text-decoration: none; font-size: small; ">
								<h5>{{$row->judul}}</h5>
							</a>
							
						</div>
						<div class="col-1 col-md-1 col-lg-1 mt-3 mb-3">
						<a href="{{route('pengumuman.edit', $row->id) }}"
                                           class="btn btn-warning btn-sm">Edit</a>
						</div>
					</div>
					@empty
					@endforelse
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
