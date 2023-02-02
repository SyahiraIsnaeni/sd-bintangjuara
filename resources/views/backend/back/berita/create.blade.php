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
                            <div class="card-title">Form Berita</div>
                            <a href="{{route('berita.index')}}" class="btn btn-warning btn-sm ml-auto"> <i class="fas fa-undo"></i> Kembali </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('berita.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="berita">Judul</label>
                                <input type="text" name="judul" class="form-control" id="text" placeholder="Enter Judul">
                            </div>
                            <div class="form-group">
                                <label for="berita">Deskripsi</label>
                                <textarea type="text" name="body" class="form-control" id="text" placeholder="Enter Deskripsi"> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="berita">Kategori</label>
                                <select name="kategori_berita_id" class="form-control">
                                    @foreach ($kategori_berita as $row)
                                        <option value="{{ $row-> id}}">{{$row->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar Berita</label>
                                <input type="file" name="gambar_berita">
                            </div>
                            <div class="form-group">
                                <label for="berita">Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1">Terbitkan</option>
                                    <option value="0">Draf</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit"> Simpan </button>
                                <button class="btn btn-danger btn-sm" type="reset"> Reset </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection