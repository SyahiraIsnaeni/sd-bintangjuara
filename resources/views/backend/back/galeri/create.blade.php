<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Tambah Gambar</title>
</head>

<body>
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
                            <div class="card-title">Form Gambar</div>
                            <a href="{{route('galeri.index')}}" class="btn btn-warning btn-sm ml-auto"> <i class="fas fa-undo"></i> Kembali </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('galeri.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
						        <label for="galeri">Judul Gambar</label>
						        <input type="text" name="judul_gambar" class="form-control" id="text" placeholder="Enter Judul">
				            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar_galeri">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info btn-sm" type="submit"> Simpan </button>
                                <button class="btn btn-danger btn-sm" type="reset"> Reset </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>