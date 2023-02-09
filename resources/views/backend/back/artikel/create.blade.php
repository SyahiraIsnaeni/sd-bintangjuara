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
                            <div class="card-title">Form Artikel</div>
                            <a href="{{route('artikel.index')}}" class="btn btn-warning btn-sm ml-auto"> <i class="fas fa-undo"></i> Kembali </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('artikel.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="artikel">Judul</label>
                                <input type="text" name="judul" class="form-control" id="text" placeholder="Enter Judul">
                            </div>
                            <div class="form-group">
                                <label for="artikel">Deskripsi</label>
                                <textarea type="text" name="body" class="form-control" id="task-textarea" placeholder="Enter Deskripsi"> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar Artikel</label>
                                <input type="file" name="gambar_artikel">
                            </div>
                            <div class="form-group">
                                <label for="artikel">Status</label>
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

@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#task-textarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection