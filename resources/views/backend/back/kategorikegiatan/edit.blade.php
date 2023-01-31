@extends('backend.layouts.default')
@section('content')
    
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Edit Kategori {{ $kategori_kegiatan->nama_kategori }} </div>
                        <a href="{{route('kategorikegiatan.index')}}" class="btn btn-warning btn=sm ml-auto"> Kembali </a>
					</div>
				</div>
				<div class="card-body">
                    <form method="post" action="{{ route('kategorikegiatan.update', $kategori_kegiatan->id)}}">
					@csrf
                    @method('PUT')
                    <div class="form-group">
						<label for="kategorikegiatan">Nama Kategori Kegiatan</label>
						<input type="text" name="nama_kategori" value=" {{$kategori_kegiatan->nama_kategori}}" class="form-control" id="text" placeholder="Enter Kategori Kegiatan">
				    </div>
					<div class="form-group">
                    <button class="btn btn-primary btn-sm" type="submit"> Simpan </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection