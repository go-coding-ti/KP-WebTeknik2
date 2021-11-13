@extends('adminlayout.layout')
@section('title', 'Daftar Bidang')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- <hr style="margin-top: 20px" class="sidebar-divider my-0"> -->
  <h1 class="h3 mb-2 text-gray-800">Bidang Penelitian</h1>
    <p class="mb-4">Daftar Bidang Penelitian {{ $staf->nama }}</p>
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
        <h6 class="m-0 font-weight-bold text-primary">Daftar Bidang Penelitian</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addBidang">
          <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Bidang Penelitian</span>
        </button>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Bidang Penelitian Indonesia</th>
                <th>Bidang Penelitian Inggris</th>
                <th  width="150">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $i => $bidang)
              <tr>
                <td>{{$bidang->bidang}}</td>
                <td>{{$bidang->bidang_eng}}</td>
                <td class="text-center"><a style="margin-right:7px" onclick="show({{$bidang->id}},'show')"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" onclick="show({{$bidang->id}},'edit')" href="#"><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletebc({{$bidang->id}})" href="#"><i class="fas fa-trash"></i></a></td>
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
<div class="modal fade" id="addBidang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="addCategory">Tambah Bidang Penelitian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <p>Masukkan Bidang Penelitian Baru</p>
          <form method="post" action="/admin/staf/bidang/store/{{ $staf->id }}" enctype="multipart/form-data" class="needs-validation" novalidate>
              @csrf
              <div class="form-group">
                <label for="kategori_ina">Bidang Penelitian Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('bidang') is-invalid @enderror" id="bidang" name="bidang" required>
                @error('bidang')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Nama bidang Bahasa Indonesia wajib diisi
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="kategori_ina">Bidang Penelitian Bahasa Inggris</label>
                <input type="text" class="form-control @error ('bidang_eng') is-invalid @enderror" id="bidang_eng" name="bidang_eng" required>
                @error('bidang_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Nama bidang Bahasa Inggris wajib diisi
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

<div class="modal fade" id="showBidang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showCategory">Show Bidang Penelitian</h5>
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
              <label for="show_kategori_ina">Bidang Penelitian Bahasa Indonesia</label>
              <input type="text" class="form-control" id="show_bidang_ina" readonly>
            </div>
            <div class="form-group">
              <label for="show_kategori_eng">Bidang Penelitian Bahasa Inggris</label>
              <input type="text" class="form-control" id="show_bidang_eng" readonly>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showBidang')">Tutup</button>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editBidang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabeledit">Edit Bidang Penelitian</h5>
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
          <p>Masukkan Data Bidang Penelitian yang Hendak Diubah.</p>
          <form id="edit-form-category" method="post" action="" enctype="multipart/form-data" class="needs-validation" novalidate>
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="edit_bidang_ina">Bidang Penelitian Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('edit_bidang_ina') is-invalid @enderror" id="edit_bidang_ina" name="edit_bidang_ina" required>
                @error('edit_bidang_ina')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Bidang penelitian Bahasa Indonesia wajib diisi
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="edit_bidang_eng">Bidang Penelitian Bahasa Inggris</label>
                <input type="text" class="form-control @error ('edit_bidang_eng') is-invalid @enderror" id="edit_bidang_eng" name="edit_bidang_eng" required>
                @error('edit_bidang_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Bidang penelitian Bahasa Inggris wajib diisi
                    </div>
                @enderror
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editBidang')">Batal</button>
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
          <h5 class="modal-title" id="exampleModalLabelhapus">Hapus Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('deleteCategory')">
          <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus bidang ini?</p>
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
      $('#showBidang').modal('show');
    }else if(status=='edit'){
      $('#editBidang').modal('show');
    }
    jQuery.ajax({
      url: "/admin/staf/bidang/"+id+"/edit",
      method: 'get',
      success: function(result){
        if(status == 'show'){
            $("#show_bidang_ina").val(result.bidang['bidang']);
            $("#show_bidang_eng").val(result.bidang['bidang_eng']);
            $("#loadingShow").hide();
            $("#bodyShow").show();
        }else{
            $("#edit_bidang_ina").val(result.bidang['bidang']);
            $("#edit_bidang_eng").val(result.bidang['bidang_eng']);
            $("#edit-form-category").attr("action", "/admin/staf/bidang/"+result.bidang['id']);
            $("#loadingEdit").hide();
            $("#bodyEdit").show();
        }                       
      }
    });
  }

  function deletebc(id){
    $("#form-delete-category").attr("action", "/admin/staf/bidang/"+id+"/delete");
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