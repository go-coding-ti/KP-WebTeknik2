@extends('adminlayout.layout')
@section('title', 'Daftar Pegawai')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pegawai</h1>
      <p class="mb-4">Daftar Pegawai Fakultas Teknik Universitas Udayana</p>

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
          <h6 class="m-0 font-weight-bold text-primary">Daftar Pegawai</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <a href="{{route('admin-pegawai-create')}}" class="btn btn-primary btn-icon-split">
              <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah Pegawai</span>
            </a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Tanggal Lahir</th>
                  <th>Jabatan</th>
                  <th width="150">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($data as $i => $pegawai)
                <tr>
                  <td>{{$pegawai->nama}}</td>
                  <td>{{$pegawai->nip}}</td>
                  <td>{{ date('d M Y', strtotime($pegawai->tanggal_lahir)) }}</td>
                  <td>{{$pegawai->jabatan->jabatan_ina}}</td>
                  <td class="text-center">
                    <a style="margin-right:7px" href="/admin/pegawai/show/{{$pegawai->id}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a>
                    <a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/pegawai/{{$pegawai->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a>
                    <a class="btn btn-danger btn-sm" onclick="deletestaf({{$pegawai->id}})" href="#"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('custom_javascript')
<script>

function showHover(msg){
  console.log(msg);
}


//Soft Delete Page
function deletestaf(id){
  swal({
    title: 'Anda yakin ingin menghapus pegawai ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
    jQuery.ajax({  
      url: 'pegawai/delete/'+id,
      type: "GET",
        success: function(result){
          location.reload();
        }
      });
    }
  });
}

//Success Alert
function alertSuccess(msg){
  swal({
    title: "Sukses",
    text: msg,
    icon: "success",
    button: "Ok",
  });
}

  $('#sidebarManajemen').addClass("active");

</script>
@endsection