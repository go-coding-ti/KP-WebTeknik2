@extends('adminlayout.layout')
@section('title', 'Detail Pegawai')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pegawai</h1>
    <p class="mb-4">Detail Pegawai Fakultas Teknik Universitas Udayana</p>

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
            <h6 class="m-0 font-weight-bold text-primary">Detail Pegawai</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-pegawai-store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror"  id="nama" name="nama" value="{{ $pegawai->nama }}" placeholder="Masukkan nama" readonly>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">NIP</label>
                    <input type="text" class="form-control @error ('nip') is-invalid @enderror" name="nip" placeholder="Masukkan NIP" value="{{ $pegawai->nip }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Tanggal Lahir</label>
                    <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" name="tanggal" placeholder="Masukkan tanggal lahir" value="{{ $pegawai->tanggal_lahir }}" readonly>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Jabatan</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror"  id="nama" name="nama" placeholder="Masukkan nama" value="{{ $pegawai->jabatan->jabatan_ina }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Email</label>
                    <input type="text" class="form-control @error ('email') is-invalid @enderror"  id="email" name="email" placeholder="Masukkan email" value="{{ $pegawai->email }}" readonly>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Nomor Telepon</label>
                    <input type="text" class="form-control @error ('telepon') is-invalid @enderror" name="telepon" placeholder="Masukkan nomor telepon" value="{{ $pegawai->nomor_telepon }}" readonly>
                </div>
            </div>
            <div class="form group mt-4">
                <label for="title">Alamat</label>
                <textarea type="text" class="form-control @error ('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan alamat" rows="4" readonly>{{ $pegawai->alamat }}</textarea>
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Biografi Bahasa Indonesia</label>
                <textarea id="content_ina" class="form-control @error ('biografi_ina') is-invalid @enderror" name="biografi_ina" rows="8" readonly>{{ $pegawai->biografi_ina }}</textarea>
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Biografi Bahasa Inggris</label>
                <textarea id="content_ina" class="form-control @error ('biografi_eng') is-invalid @enderror" name="biografi_eng" rows="8" readonly>{{ $pegawai->biografi_eng }}</textarea>
            </div>
            <div class="form-group mt-4">
                <label for="thumbnail">Foto Profil</label>
                <br>
                <input type="text" class="form-control" name="foto" id="foto" placeholder="url" hidden required>
                <img src="{{ $pegawai->foto }}" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-pegawai-home')}}" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </form>
            </form>
        </div>
    </div>
</div>

{{-- CROPPER --}}
<div class="modal fade" id="crop-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Pilih Foto Profil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row" style="margin: 20px">
                <img  src="{{asset('')}}assets/admin/img/profile.png" id="image-preview"  width="100%" height="100%" alt="">
                <div class="custom-file" style="margin-top: 20px">
                    <input type="file" class="custom-file-input" id="profile-image" name="thumbnail" accept="images/*" required>
                    <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Foto</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="modal-close" class="btn btn-danger" data-dismiss="modal">Kembali</button>
            <button type="button" id="update-foto-profile" class="btn btn-primary" data-dismiss="modal">Pilih</button>
        </div>
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
        $("#jenis").val($("input[name='radio_jenis']:checked").val());

        $("input[name='radio_jenis']").change(function(){
            $("#jenis").val($("input[name='radio_jenis']:checked").val());
        });
    });

    //CROPPER
function changeProfile(){
		$('#profile-image').trigger('click');
	}

	var cropper;
	var image = document.getElementById('image-preview');

	$(document).ready(function(){
	    $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
	            'Accept-Encoding' : 'gzip',
	        }
	    });
		$('#profile-image').on('change', function(){
			var filedata = this.files[0];
			var imgtype = filedata.type;
			var match = ['image/jpg', 'image/jpeg', 'image/png'];
			if (!(filedata.type==match[0]||filedata.type==match[1]||filedata.type==match[2])) {
	            alert("Format gambar Salah");
	        }else{
	        	var reader=new FileReader();
	            reader.onload=function(ev){
	                $('#image-preview').attr('src', ev.target.result);
					cropper.destroy();
   					cropper = null;
					cropper = new Cropper(image, {
						aspectRatio: 1,
						viewMode: 3,
						preview: '.preview'
					});
	            }
	            reader.readAsDataURL(this.files[0]);
	            var postData=new FormData();
	            postData.append('file', this.files[0]);
	        }
		});
		$('#crop-image').on('shown.bs.modal', function(){
			cropper = new Cropper(image, {
				aspectRatio: 1,
				viewMode: 3,
				preview: '.preview'
			});
		}).on('hidden.bs.modal', function(){
			cropper.destroy();
   			cropper = null;
		});

		$('#update-foto-profile').on('click', function(){
			canvas = cropper.getCroppedCanvas({
				width: 720,
				height: 1280,
			});
			canvas.toBlob(function(blob){
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob);
                
				reader.onloadend = function() {
                    $('#propic').attr('src', reader.result);
					var base64data = reader.result;
                    $('#foto').val(reader.result);
                    
				}
			});
		});
	});

    //Select2
    $(document).ready(function() {
        $('.select2').select2();
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

    $('#sidebarManajemen').addClass("active");
</script>
@endsection