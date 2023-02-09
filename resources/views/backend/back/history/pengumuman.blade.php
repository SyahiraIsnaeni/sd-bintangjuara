<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Riwayat Pengumuman</title>
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
                            <div class="card-title">Data Riwayat Pengumuman</div>
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
                                    <th>Status</th>
                                    <th style="width:20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($pengumuman as $row)
                                    <tr>
                                        @if ($row->delete == 'Y')
                                            <td>{{ $row->judul}}</td>
                                            <td>{{ $row->slug}}</td>
                                            <td>
                                                @if ($row->is_active == '1')
                                                    Diterbitkan
                                                @else
                                                    Draf
                                                @endif
                                            </td>
                                            <td>

                                                <form action="{{route('history-pengumuman.destroy', $row->id)}}" method="post"
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
                                        <td colspan="6" class="text-center">Tidak Ada Riwayat Data</td>
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