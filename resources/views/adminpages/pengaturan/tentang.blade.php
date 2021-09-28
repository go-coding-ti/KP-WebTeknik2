@extends('adminlayout.layout')
@section('title', 'Tentang Fakultas Teknik')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tentang</h1>
      <p class="mb-4">Tentang Fakultas Teknik Universitas Udayana</p>

      @if (session()->has('statusInput'))
        <div class="row">
          <div class="col-sm-12 alert alert-success alert-dismissible fade show" role="alert">
              {{session()->get('statusInput')}}
              <button type="button" class="close" data-dismiss="alert"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </div>
      @endif  

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
          <h6 class="m-0 font-weight-bold text-primary">Tentang</h6>
        </div>
        <div class="card-body">
            <div class="card-body col-12">
                <form id="form-product" method="post" action="{{Route('admin-about-store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mt-2">
                        <label for="tentang_ina">Sejarah Fakultas Teknik Bahasa Indonesia</label>
                        <textarea id="tentang_ina" class="summernote" name="tentang_ina" required>{!! $preference->tentang_ina !!}</textarea>
                        @error('tentang_ina')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Sejarah Fakultas Teknik wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="tentang_eng">Sejarah Fakultas Teknik Bahasa Inggris</label>
                        <textarea id="tentang_eng" class="summernote" name="tentang_eng" required>{!! $preference->tentang_eng !!}</textarea>
                        @error('tentang_ina')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Sejarah Fakultas Teknik wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-5">
                        <label for="tentang_ina">Visi & Misi Fakultas Teknik Bahasa Indonesia</label>
                        <textarea id="visi_misi_ina" class="summernote" name="visi_misi_ina" required>{!! $preference->visi_misi_ina !!}</textarea>
                        @error('visi_misi_ina')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Visi & Misi Fakultas Teknik wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="tentang_eng">Visi & Misi Fakultas Teknik Bahasa Inggris</label>
                        <textarea id="visi_misi_eng" class="summernote" name="visi_misi_eng" required>{!! $preference->visi_misi_eng !!}</textarea>
                        @error('visi_misi_eng')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Visi & Misi Fakultas Teknik wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-5">
                        <label for="tentang_ina">Tujuan & Target Fakultas Teknik Bahasa Indonesia</label>
                        <textarea id="tujuan_ina" class="summernote" name="tujuan_ina" required>{!! $preference->tujuan_ina !!}</textarea>
                        @error('tujuan_ina')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Tujuan & Target Fakultas Teknik wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="tentang_eng">Tujuan & Target Fakultas Teknik Bahasa Inggris</label>
                        <textarea id="tujuan_eng" class="summernote" name="tujuan_eng" required>{!! $preference->tujuan_eng !!}</textarea>
                        @error('tujuan_eng')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Tujuan & Target Fakultas Teknik wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-5">
                        <label for="tentang_ina">Denah Fakultas Teknik Bahasa Indonesia</label>
                        <textarea id="denah_ina" class="summernote" name="denah_ina" required>{!! $preference->denah_ina !!}</textarea>
                        @error('denah_ina')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Denah Fakultas Teknik wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="tentang_eng">Denah Fakultas Teknik Bahasa Inggris</label>
                        <textarea id="denah_eng" class="summernote" name="denah_eng" required>{!! $preference->denah_eng !!}</textarea>
                        @error('denah_eng')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Denah Fakultas Teknik wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                      <button type="reset" class="btn btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                              <i class="fas fa-sync"></i>
                          </span>
                          <span class="text">Reset</span>
                        </button>
                      <button  type="submit" class="btn btn-success btn-icon-split">
                          <span class="icon text-white-50">
                              <i class="fas fa-save"></i>
                          </span>
                          <span class="text">Simpan</span>
                      </button>
                    </div>
                </form>           
              </div>
        </div>
      </div>
</div>


{{-- CROPPER --}}
<div class="modal fade" id="crop-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pilih Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row" style="margin: 20px">
              <img  src="{{$preference->logo}}" id="image-preview"  width="100%" height="100%" alt="">
              <div class="custom-file" style="margin-top: 20px">
                  <input type="file" class="custom-file-input" id="profile-image" name="thumbnail" accept="images/*" required>
                  <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Logo</label>
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
<script>
  $('.summernote').summernote({
      height: 350, // set editor height
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
      focus: false // set focus to editable area after initializing summernote
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
		$('#link-back').attr('href', '{{url("/siswa/dashboard")}}');
		$('#link-back-mini').attr('href', '{{url("/siswa/dashboard")}}');
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
						aspectRatio: 2.5 / 3,
						viewMode: 3,
						preview: '.preview'
					});
	            }
	            reader.readAsDataURL(this.files[0]);
	            var postData=new FormData();
	            var id = $('input[name=id_siswa]').val();
	            postData.append('file', this.files[0]);
	        }
		});
		$('#crop-image').on('shown.bs.modal', function(){
			cropper = new Cropper(image, {
				aspectRatio: 2.5 / 3,
				viewMode: 3,
				preview: '.preview'
			});
		}).on('hidden.bs.modal', function(){
			cropper.destroy();
   			cropper = null;
		});

		$('#update-foto-profile').on('click', function(){
			canvas = cropper.getCroppedCanvas({
				width: 1080,
				height: 1920,
			});
			canvas.toBlob(function(blob){
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob);
                
				reader.onloadend = function() {
                    $('#propic').attr('src', reader.result);
					var base64data = reader.result;
                    $('#logo').val(reader.result);
                    
				}
			});
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

  $('#sidebarPengaturan').addClass("active");
</script>
@endsection