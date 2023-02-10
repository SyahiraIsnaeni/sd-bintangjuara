<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Ubah Kategori Pengumuman</title>
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
                            <div class="card-title">Edit Kategori {{ $kategori_pengumuman->nama_kategori }} </div>
                            <a href="{{route('kategoripengumuman.index')}}" class="btn btn-warning btn=sm ml-auto"> Kembali </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('kategoripengumuman.update', $kategori_pengumuman->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kategoripengumuman">Nama Kategori Pengumuman</label>
                                <input type="text" name="nama_kategori" value=" {{$kategori_pengumuman->nama_kategori}}" class="form-control" id="text" placeholder="Enter Kategori Pengumuman">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info btn-sm" type="submit"> Simpan </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>