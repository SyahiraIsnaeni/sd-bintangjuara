<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tambah Data Waqaf</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{asset('back/img/icon.ico')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">

    <!-- Fonts and icons -->
    <script src="{{ asset('back/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: [{{asset('back/css/fonts.min.css')}}]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>


    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('back/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/atlantis.min.css')}}">

<!-- CSS Just for demo purpose, don't include it in your project
	<link rel="stylesheet" href="{{asset('back/css/demo.css')}}"> -->

</head>
<body>
<div class="wrapper">
    @include('backend.includes.header')
    @include('backend.includes.sidebarwaqaf')
    <div class="main-panel">
        <div class="content">
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
                                    <div class="card-title">Form Data Waqaf</div>
                                    <a href="{{route('waqaf.index')}}" class="btn btn-warning btn-sm ml-auto"> <i class="fas fa-undo"></i> Kembali </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('waqaf.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="waqaf">Nama Bank</label>
                                        <input type="text" name="nama_bank" class="form-control" id="text" placeholder="Enter Nama Bank">
                                    </div>
                                    <div class="form-group">
                                        <label for="waqaf">Nama Rekening</label>
                                        <input type="text" name="nama_rekening" class="form-control" id="text" placeholder="Enter Nama Rekening">
                                    </div>
                                    <div class="form-group">
                                        <label for="waqaf">Nomor Rekening</label>
                                        <input type="text" name="nomor_rekening" class="form-control" id="text" placeholder="Enter Nomor Rekening">
                                    </div>
                                    <div class="form-group">
                                        <label for="waqaf">Total Kebutuhan</label>
                                        <input type="text" name="total_kebutuhan" class="form-control" id="text" placeholder="Enter Total Kebutuhan">
                                    </div>
                                    <div class="form-group">
                                        <label for="waqaf">Dana Terkumpul</label>
                                        <input type="text" name="dana_terkumpul" class="form-control" id="text" placeholder="Enter Dana Terkumpul">
                                    </div>
                                    <div class="form-group">
                                        <label for="waqaf">Total Kekurangan</label>
                                        <input type="text" name="total_kekurangan" class="form-control" id="text" placeholder="Enter Total Kekurangan">
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
            @section('scripts')
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#task-textarea' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
            @endsection
        </div>
        @include('backend.includes.footer')
    </div>
</div>
<!--   Core JS Files   -->
@include('backend.includes.js')
@include('sweetalert::alert', ['cdn'=>"https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@yield('scripts')
</body>
</html>
