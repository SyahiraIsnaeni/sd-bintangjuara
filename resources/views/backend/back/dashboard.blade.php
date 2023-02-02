@extends('backend.layouts.default')
@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Dashboard Admin</h2>
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
								<h4 class="card-title">90</h4>
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
                    <table class="table">
                        <tbody>
                        @forelse ($kegiatan as $row)
                            <tr>
                                <td>
                                    @if ($row->is_active == '0')
                                        <td><img src="{{asset('uploads/'.$row->gambar_artikel) }}" width="60"></td>
                                        <td>{{ $row->judul}}</td>
                                        <td>
                                            <a href="{{route('kegiatan.edit', $row->id) }}"
                                               class="btn btn-warning btn-sm">Edit</a>
                                        </td>
                                    @else

                                    @endif
                                </td>
                            </tr>
                        @empty

                        @endforelse
                        </tbody>
                    </table>
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
                    <table class="table">
                        <tbody>
                        @forelse ($berita as $row)
                            <tr>
                                <td>
                                @if ($row->is_active == '0')
                                    <td><img src="{{asset('uploads/'.$row->gambar_berita) }}" width="60"></td>
                                    <td>{{ $row->judul}}</td>
                                    <td>
                                        <a href="{{route('berita.edit', $row->id) }}"
                                           class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    @else

                                    @endif
                                </td>
                            </tr>
                        @empty

                        @endforelse
                        </tbody>
                    </table>
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
                    <table class="table">
                        <tbody>
                        @forelse ($artikel as $row)
                            <tr>
                                <td>
                                @if ($row->is_active == '0')
                                    <td><img src="{{asset('uploads/'.$row->gambar_artikel) }}" width="60"></td>
                                    <td>{{ $row->judul}}</td>
                                    <td>
                                        <a href="{{route('artikel.edit', $row->id) }}"
                                           class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    @else

                                    @endif
                                    </td>
                            </tr>
                        @empty

                        @endforelse
                        </tbody>
                    </table>

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
                    <table class="table">
                        <tbody>
                        @forelse ($pengumuman as $row)
                            <tr>
                                <td>
                                @if ($row->is_active == '0')
                                    <td><img src="{{asset('uploads/'.$row->gambar_pengumuman) }}" width="60"></td>
                                    <td>{{ $row->judul}}</td>
                                    <td>
                                        <a href="{{route('pengumuman.edit', $row->id) }}"
                                           class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    @else

                                    @endif
                                    </td>
                            </tr>
                        @empty

                        @endforelse
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
