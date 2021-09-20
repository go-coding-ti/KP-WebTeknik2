@extends('adminlayout.layout')
@section('title', 'Tambah Agenda')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Agenda</h1>
    <p class="mb-4">Tambah Agenda Fakultas Teknik Universitas Udayana</p>

    @if (count($errors)>0)
        <div class="row">
            <div class="col-sm-12 alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Agenda</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-agenda-store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form group mt-1">
                <label for="title">Judul Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" required>
                @error('title_ina')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Judul Bahasa Indonesia wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-4">
                <label for="title">Judul Bahasa Inggris</label>
                <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" required>
                @error('title_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Judul Bahasa Inggris wajib diisi
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="kategori">Kategori Agenda</label>
                    <select class="form-control @error ('kategori') is-invalid @enderror" data-live-search="true" id="kategori" rows="3" name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategori as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->kategori_ina}}</option>
                        @endforeach
                    </select>
                    @error('kategori')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Kategori agenda wajib dipilih
                        </div>
                    @enderror  
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Tanggal Berlangsung</label>
                    <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal Berlangsung" required>
                    @error('tanggal')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Tanggal berlangsung wajib diisi
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Waktu Mulai</label>
                    <input type="time" class="form-control @error ('waktu_mulai') is-invalid @enderror" name="waktu_mulai" placeholder="Waktu Mulai" required>
                    @error('waktu_mulai')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Waktu mulai wajib diisi
                        </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Waktu Berakhir</label>
                    <input type="time" class="form-control @error ('waktu_akhir') is-invalid @enderror" name="waktu_akhir" placeholder="Waktu Mulai" required>
                    @error('waktu_akhir')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Waktu berakhir wajib diisi
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form group mt-4">
                <label for="title">Lokasi</label>
                <input type="text" class="form-control @error ('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Lokasi Agenda" required>
                @error('lokasi')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Lokasi wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-4">
                <label for="title">Alamat Website</label>
                <input type="text" class="form-control" id="website" name="website" placeholder="Website Agenda">
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Konten Bahasa Indonesia</label>
                <textarea id="content_ina" class="summernote" name="content_ina" required></textarea>
                @error('content_ina')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Konten Bahasa Indonesia wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Konten Bahasa Inggris</label>
                <textarea id="content_eng" class="summernote" name="content_eng" required></textarea>
                @error('content_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Konten Bahasa Inggris wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group mt-4">
                <label for="lampiran">File Lampiran</label>
                <br>    
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="lampiran" name="lampiran">
                    <label for="lampiran_label" id="lampiran_label" class="custom-file-label">Pilih Lampiran</label>
                </div>
                {{-- <input type="file" class="form-control-file" id="lampiran" name="lampiran"> --}}
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-agenda-home')}}" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Batal</span>
                </a>
                <button  type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Simpan</span>
                </button>
            </div>
        </form>
            </form>
        </div>
    </div>
</div>
@endsection

@section('custom_javascript')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $(document).ready(function(e){
        var status;
        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $(function(){
            $(".tanggal").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#lampiran").change(function() {
            document.getElementById('lampiran_label').innerHTML = document.getElementById('lampiran').files[0].name;
        });
    });

    // Validasi Form
    (function () {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()

    $('#sidebarAgenda').addClass("active");
</script>
@endsection