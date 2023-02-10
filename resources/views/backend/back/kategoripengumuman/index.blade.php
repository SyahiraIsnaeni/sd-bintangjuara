<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Kategori Pengumuman</title>
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
                            <div class="card-title">Data Kategori Pengumuman</div>
                            <a href="{{route('kategoripengumuman.create')}}" class="btn btn-info btn=sm ml-auto"> <i
                                    class="fas fa-plus"></i>Tambah Kategori</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mt-4">
                            @if(Session::has('success'))
                                <div class="alert alert-primary">
                                    {{ Session('success')}}
                                </div>
                            @endif
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($kategori_pengumuman as $row)
                                    <tr>
                                        <td>{{ $row->nama_kategori}}</td>
                                        <td>{{ $row->slug}}</td>
                                        <td>
                                            <a href="{{route('kategoripengumuman.edit', $row->id) }}"
                                               class="btn btn-warning btn-sm">Ubah</a>

                                            <form action="{{route('kategoripengumuman.destroy', $row->id)}}" method="post"
                                                  class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Masih Kosong</td>
                                </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>