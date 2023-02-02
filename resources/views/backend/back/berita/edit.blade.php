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
                            <div class="card-title">Edit Berita {{$berita->judul}}</div>
                            <a href="{{route('berita.index')}}" class="btn btn-warning btn-sm ml-auto"> <i class="fas fa-undo"></i> Kembali </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('berita.update', $berita->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="berita">Judul</label>
                                <input type="text" name="judul" class="form-control" id="text" value="{{$berita->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="berita">Deskripsi</label>
                                <textarea name="body" class="form-control">{{ $berita->body}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Berita">Kategori</label>
                                <select name="kategori_berita_id" class="form-control">
                                    @foreach ($kategori_berita as $row)
                                        @if ($row->id == $berita->kategori_berita_id)
                                            <option value={{$row->id}} selected='selected'> {{ $row->nama_kategori}} </option>
                                        @else
                                            <option value="{{$row->id}}">
                                                {{ $row->nama_kategori}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="berita">Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1" {{$berita->is_active == '1' ? 'selected' : '' }}>
                                        Terbitkan
                                    </option>
                                    <option value="0" {{$berita->is_active == '0' ? 'selected' : '' }}>
                                        Draf
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar Berita</label>
                                <input type="file" name="gambar_artikel" class="form-control">
                                <br>
                                <label for="gambar">Gambar Saat Ini</label><br>
                                <img src="{{asset('uploads/'.$berita->gambar_artikel) }}" width="100">
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
