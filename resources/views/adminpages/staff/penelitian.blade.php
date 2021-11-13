@extends('adminlayout.layout')
@section('title', 'Daftar Penelitian')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- <hr style="margin-top: 20px" class="sidebar-divider my-0"> -->
  <h1 class="h3 mb-2 text-gray-800">Penelitian</h1>
    <p class="mb-4">Daftar Penelitian {{ $staf->nama }}</p>
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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Penelitian</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addPenelitian">
          <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Penelitian</span>
        </button>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Penelitian</th>
                <th  width="150">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $i => $penelitian)
              <tr>
                <td>{{$penelitian->penelitian}}</td>
                <td class="text-center"><a style="margin-right:7px" onclick="show({{$penelitian->id}},'show')"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" onclick="show({{$penelitian->id}},'edit')" href="#"><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletebc({{$penelitian->id}})" href="#"><i class="fas fa-trash"></i></a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <a class="btn btn-danger btn-icon-split mt-2" href="/admin/staf">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
        </div>
      </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Add News Category Modal-->
<div class="modal fade" id="addPenelitian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="addCategory">Tambah Penelitian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <p>Masukkan Penelitian Baru</p>
          <form method="post" action="/admin/staf/penelitian/store/{{ $staf->id }}" enctype="multipart/form-data" class="needs-validation" novalidate>
              @csrf
              <div class="form-group">
                <label for="kategori_ina">Penelitian</label>
                <textarea type="text" class="form-control @error ('penelitian') is-invalid @enderror" id="penelitian" name="penelitian" rows="5" required></textarea>
                @error('penelitian')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Penelitian wajib diisi
                    </div>
                @enderror
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

<div class="modal fade" id="showPenelitian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showCategory">Show Penelitian</h5>
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
              <label for="kategori_ina">Penelitian</label>
              <textarea type="text" class="form-control @error ('show_penelitian') is-invalid @enderror" id="show_penelitian" name="show_penelitian" rows="5" required disabled></textarea>
              @error('show_penelitian')
                  <div class="invalid-feedback text-start">
                      {{ $message }}
                  </div>
              @else
                  <div class="invalid-feedback">
                      Penelitian wajib diisi
                  </div>
              @enderror
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showPenelitian')">Tutup</button>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editPenelitian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabeledit">Edit Penelitian</h5>
          <button class="close" type="button" data-dismiss="editCategory" aria-label="Close" onclick="closeModal('editPenelitian')">
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
          <p>Masukkan Data Penelitian yang Hendak Diubah.</p>
          <form id="edit-form-category" method="post" action="" enctype="multipart/form-data" class="needs-validation" novalidate>
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="kategori_ina">Penelitian</label>
                <textarea type="text" class="form-control @error ('edit_penelitian') is-invalid @enderror" id="edit_penelitian" name="edit_penelitian" rows="5" required></textarea>
                @error('edit_penelitian')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Penelitian wajib diisi
                    </div>
                @enderror
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editPenelitian')">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>              
      </div>
    </div>
    </div>
</div>

<!-- Hapus News Category Modal-->
<div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabelhapus">Hapus Penelitian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('deleteCategory')">
          <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus penelitian ini?</p>
          <form id="form-delete-category" method="post" action="">
              @method('delete')
              @csrf
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" onclick="closeModal('deleteCategory')" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-danger">Hapus</button>
              </div>
            </form>              
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
      $('#showPenelitian').modal('show');
    }else if(status=='edit'){
      $('#editPenelitian').modal('show');
    }
    jQuery.ajax({
      url: "/admin/staf/penelitian/"+id+"/edit",
      method: 'get',
      success: function(result){
        if(status == 'show'){
            $("#show_penelitian").val(result.penelitian['penelitian']);
            $("#loadingShow").hide();
            $("#bodyShow").show();
        }else{
            $("#edit_penelitian").val(result.penelitian['penelitian']);
            $("#edit-form-category").attr("action", "/admin/staf/penelitian/"+result.penelitian['id']);
            $("#loadingEdit").hide();
            $("#bodyEdit").show();
        }                       
      }
    });
  }

  function deletebc(id){
    $("#form-delete-category").attr("action", "/admin/staf/penelitian/"+id+"/delete");
    $('#deleteCategory').modal('show');
  }

  function closeModal(jenis){
    $('#'+jenis).modal('hide'); 
  }

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