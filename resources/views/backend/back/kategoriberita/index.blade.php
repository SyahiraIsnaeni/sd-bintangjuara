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
                            <div class="card-title">Data Kategori Berita</div>
                            <a href="{{route('kategoriberita.create')}}" class="btn btn-primary btn=sm ml-auto"> <i
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
                                    <th>ID</th>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($kategori_berita as $row)
                                    <tr>
                                        <td>{{ $row->id}}</td>
                                        <td>{{ $row->nama_kategori}}</td>
                                        <td>{{ $row->slug}}</td>
                                        <td>
                                            <a href="{{route('kategoriberita.edit', $row->id) }}"
                                               class="btn btn-warning btn-sm">Edit</a>

                                            <form action="{{route('kategoriberita.destroy', $row->id)}}" method="post"
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
