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
                            <div class="card-title">Data Artikel</div>
                            <a href="{{route('artikel.create')}}" class="btn btn-primary btn=sm ml-auto"> <i
                                    class="fas fa-plus"></i>Tambah Artikel </a>
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
                                    <th>Judul</th>
                                    <th>Slug</th>
                                    <th>Gambar</th>
                                    <th>Status</th>
                                    <th style="width:20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($artikel as $row)
                                    <tr>
                                        @if ($row->delete == 'N')
                                            <td>{{ $row->judul}}</td>
                                            <td>{{ $row->slug}}</td>
                                            <td><img src="{{asset('uploads/'.$row->gambar_artikel) }}" width="100"></td>
                                            <td>
                                                @if ($row->is_active == '1')
                                                    Diterbitkan
                                                @else
                                                    Draf
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('artikel.edit', $row->id) }}"
                                                   class="btn btn-warning btn-sm">Ubah</a>

                                                <form action="{{route('artikel.destroy', $row->id)}}" method="post"
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>

                                                </form>
                                            </td>
                                        @else
                                        @endif

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
