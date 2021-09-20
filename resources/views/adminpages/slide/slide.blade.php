@extends('adminlayout.layout')
@section('title', 'Daftar Slideshow')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- <hr style="margin-top: 20px" class="sidebar-divider my-0"> -->
<h1 class="h3 mb-2 text-gray-800">Slideshow</h1>
  <p class="mb-4">Daftar Slideshow Website Fakultas Teknik Universitas Udayana</p>

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
      <h6 class="m-0 font-weight-bold text-primary">Daftar Slideshow</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <button data-toggle="modal" data-target="#addCategory" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Slideshow</span>
        </button>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Judul Bahasa Indonesia</th>
              <th>Judul Bahasa Inggris</th>
              <th  width="150">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($data as $i => $slide)
            <tr>
              <td>{{$slide->title_ina}}</td>
              <td>{{$slide->title_eng}}</td>
              <td class="text-center"><a style="margin-right:7px" onclick="show({{$slide->id}},'show')"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" onclick="show({{$slide->id}},'edit')" href="#"><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletebc({{$slide->id}})" href="#"><i class="fas fa-trash"></i></a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Add News Category Modal-->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCategory">Tambah Slideshow</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Masukkan Slideshow Baru</p>
        <form method="post" action="/admin/slideshows/store" enctype="multipart/form-data" class="needs-validation" novalidate>
          @csrf
          <div class="form-group">
            <label for="kategori_ina">Judul Bahasa Indonesia</label>
            <input type="text" class="form-control @error ('title_ina') is-invalid @enderror" id="title_ina" name="title_ina" required>
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
          <div class="form-group">
            <label for="kategori_eng">Judul Bahasa Inggris</label>
            <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" required>
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
          <div class="form-group mt-4">
              <label for="icon">Slideshow</label>
              <br>
              <input type="text" class="form-control" name="logo" id="logo" placeholder="url" hidden required>
              <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:50%;width:50%;" id="propic">
              @error('logo')
              <div class="invalid-feedback text-start">
                  {{ $message }}
              </div>
              @else
                  <div class="invalid-feedback">
                    Slideshow wajib diisi
                  </div>
              @enderror
              <div class="custom-file mt-2">
                <button data-toggle="modal" data-target="#crop-image" class="btn btn-primary btn-icon-split">
                  <span class="icon text-white-50">
                      <i class="fas fa-images"></i>
                  </span>
                  <span class="text">Pilih slideshow</span>
                </button>
              </div>
          </div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>              
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="showSlideshow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="showCategory">Show Slideshow</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showCategory')">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body" id="loadingShow">
        <div class="d-flex justify-content-center">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>
      <div class="modal-body" id="bodyShow">
        <div class="form-group">
          <label for="show_slideshow_ina">Judul Bahasa Indonesia</label>
          <input type="text" class="form-control" id="show_slideshow_ina" readonly>
        </div>
        <div class="form-group">
          <label for="show_kategori_eng">Judul Bahasa Inggris</label>
          <input type="text" class="form-control" id="show_slideshow_eng" readonly>
        </div>
        <div class="form-group mt-4">
          <label for="icon">Slideshow</label>
          <br>
          <div class="text-center">
            <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" class="mb-3" style="border: 2px solid #DCDCDC;height:100%;width:100%;" id="show_icon">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showSlideshow')">Tutup</button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editSlideshow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabeledit">Edit Slideshow</h5>
        <button class="close" type="button" data-dismiss="editCategory" aria-label="Close" onclick="closeModal('editCategory')">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body" id="loadingEdit">
      <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <div class="modal-body" id="bodyEdit">
      <p>Masukkan Data Slideshow yang Hendak Diubah.</p>
      <form id="edit-form-category" method="post" action="" enctype="multipart/form-data" class="needs-validation" novalidate>
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="edit_kategori_ina">Judul Bahasa Indonesia</label>
            <input type="text" class="form-control @error ('edit_kategori_ina') is-invalid @enderror" id="edit_slideshow_ina" name="edit_slideshow_ina" required>
            @error('edit_slideshow_ina')
            <div class="invalid-feedback text-start">
                {{ $message }}
            </div>
            @else
                <div class="invalid-feedback">
                    Judul Bahasa Indonesia wajib diisi
                </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="edit_kategori_eng">Judul Bahasa Inggris</label>
            <input type="text" class="form-control @error ('edit_slideshow_eng') is-invalid @enderror" id="edit_slideshow_eng" name="edit_slideshow_eng" required>
            @error('edit_slideshow_eng')
            <div class="invalid-feedback text-start">
                {{ $message }}
            </div>
            @else
                <div class="invalid-feedback">
                    Judul Bahasa Inggris wajib diisi
                </div>
            @enderror
          </div>
          <div class="form-group mt-4">
            <label for="icon">Slideshow</label>
            <br>
            <input type="text" class="form-control" name="edit_logo" id="edit_logo" placeholder="url" hidden>
            <img src="{{asset('assets/admin/img/pictures_placeholder1.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:100%;width:100%;" id="edit_propic">
            <div class="custom-file">
                <button type="button" class="btn btn-primary mt-1" data-target="#edit_crop-image" data-toggle="modal"><i class="fa fa-images"></i> Ganti Slideshow</button>
            </div>
          </div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editSlideshow')">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>              
      </div>
    </div>
  </div>
</div>

<!-- Hapus News Category Modal-->
<div class="modal fade" id="deleteSlideshow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabelhapus">Delete Slideshow</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('deleteSlideshow')">
          <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus slideshow ini?</p>
          <form id="form-delete-slideshow" method="post" action="">
            @method('delete')
            @csrf
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" onclick="closeModal('deleteSlideshow')" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
          </form>              
      </div>
    </div>
  </div>
</div>

{{-- CROPPER ADD --}}
<div class="modal fade" id="crop-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pilih Slideshow</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin: 20px">
          <img  src="{{asset('')}}assets/admin/img/pictures_placeholder.png" id="image-preview"  width="100%" height="100%" alt="">
          <div class="custom-file" style="margin-top: 20px">
              <input type="file" class="custom-file-input" id="profile-image" name="galeri" accept="images/*" required>
              <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Slideshow</label>
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

{{-- CROPPER EDIT --}}
<div class="modal fade" id="edit_crop-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ganti Slideshow</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin: 20px">
          <img  src="{{asset('')}}assets/admin/img/pictures_placeholder.png" id="edit_image-preview"  width="100%" height="100%" alt="">
          <div class="custom-file" style="margin-top: 20px">
              <input type="file" class="custom-file-input" id="edit_profile-image" name="galeri" accept="images/*" required>
              <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Slideshow</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="modal-close" class="btn btn-danger" data-dismiss="modal">Kembali</button>
        <button type="button" id="edit_update-foto-profile" class="btn btn-primary" data-dismiss="modal">Pilih</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom_javascript')
<script>
  function show(id,status){
    $("#bodyEdit").hide();
    $("#bodyShow").hide();
    $("#loadingShow").show();
    $("#loadingEdit").show();
    if(status=='show'){
      $('#showSlideshow').modal('show');
    }else if(status=='edit'){
      $('#editSlideshow').modal('show');
    }
    jQuery.ajax({
      url: "/admin/slideshows/"+id+"/edit",
      method: 'get',
      success: function(result){
          if(status == 'show'){
              $("#show_slideshow_ina").val(result.slide['title_ina']);
              $("#show_slideshow_eng").val(result.slide['title_eng']);
              $('#show_icon').attr('src', result.slide['slide_show']);
              $("#loadingShow").hide();
              $("#bodyShow").show();
          }else{
              $("#edit_slideshow_ina").val(result.slide['title_ina']);
              $("#edit_slideshow_eng").val(result.slide['title_eng']);
              $('#edit_propic').attr('src', result.slide['slide_show']);
              $('#edit_image-preview').attr('src', result.slide['slide_show']);
              $("#edit-form-category").attr("action", "/admin/slideshows/"+result.slide['id']);
              $("#loadingEdit").hide();
              $("#bodyEdit").show();
          }                    
        }
      });
    }

    function deletebc(id){
      $("#form-delete-slideshow").attr("action", "/admin/slideshows/"+id+"/delete");
      $('#deleteSlideshow').modal('show');
    }

    function closeModal(jenis){
      $('#'+jenis).modal('hide'); 
    }

    //CROPPER
    function changeProfile(){
      $('#profile-image').trigger('click');
    }

	var cropper;
	var imageadd = document.getElementById('image-preview');

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
					cropper = new Cropper(imageadd, {
						aspectRatio: 21/9,
						viewMode: 1,
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
			cropper = new Cropper(imageadd, {
				aspectRatio: 21/9,
				viewMode: 1,
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

	var cropper;
	var image = document.getElementById('edit_image-preview');

	$(document).ready(function(){
	    $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
	            'Accept-Encoding' : 'gzip',
	        }
	    });
		$('#link-back').attr('href', '{{url("/siswa/dashboard")}}');
		$('#link-back-mini').attr('href', '{{url("/siswa/dashboard")}}');
		$('#edit_profile-image').on('change', function(){
			var filedata = this.files[0];
			var imgtype = filedata.type;
			var match = ['image/jpg', 'image/jpeg', 'image/png'];
			if (!(filedata.type==match[0]||filedata.type==match[1]||filedata.type==match[2])) {
	            alert("Format gambar Salah");
	        }else{
	        	var reader=new FileReader();
	            reader.onload=function(ev){
	                $('#edit_image-preview').attr('src', ev.target.result);
					cropper.destroy();
   					cropper = null;
					cropper = new Cropper(image, {
						aspectRatio: 21/9,
						viewMode: 1,
						preview: '.preview'
					});
	            }
	            reader.readAsDataURL(this.files[0]);
	            var postData=new FormData();
	            var id = $('input[name=id_siswa]').val();
	            postData.append('file', this.files[0]);
	        }
		});
		$('#edit_crop-image').on('shown.bs.modal', function(){
			cropper = new Cropper(image, {
				aspectRatio: 21 /9,
				viewMode: 1,
				preview: '.preview'
			});
		}).on('hidden.bs.modal', function(){
			cropper.destroy();
   			cropper = null;
		});

		$('#edit_update-foto-profile').on('click', function(){
			canvas = cropper.getCroppedCanvas({
				width: 1080,
				height: 1920,
			});
			canvas.toBlob(function(blob){
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob);
                
				reader.onloadend = function() {
                    $('#edit_propic').attr('src', reader.result);
					var base64data = reader.result;
                    $('#edit_logo').val(reader.result);
                    
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

    $('#sidebarSlideshow').addClass("active");
</script>
@endsection