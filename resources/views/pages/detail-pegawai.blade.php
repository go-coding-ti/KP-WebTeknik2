@extends('layouts/UserLayout')

@section('content')

  @if (App::getLocale() == 'en')
    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Staff Detail</h1>
        <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Staff Pengajar", app()->getLocale() ) }}">Back</a></h1>
        </div>
        <hr class="border border-light dropdown-divider">
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="card bg-grey text-white border-danger" w-100>
                <img src="{{ $pegawai->foto }}" class="card-img-top" alt="...">
                <div class="card-body text-center mb-3">
                    <span class="card-text fw-bold fs-4">{{ $pegawai->nama }}</span>
                    <p class="card-text fs-5">{{ $pegawai->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="rounded p-3 bg-grey text-white">
                <h4 class="fw-bold">{{ $pegawai->nama }}</h4>
                <span class="fs-5">{{ $pegawai->jabatan->jabatan_eng }}</span>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Biography</h4>
                <p class="fs-6">{{ $pegawai->biografi_eng }}</p>
            </div>
            <div class="rounded p-3 bg-grey text-white">
                <h4 class="fw-bold">Contact</h4>
                <ol class="list-group list-group border-0 bg-grey">
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><span>Home Address</span></div>
                            <span>{{ $pegawai->alamat }}</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><span>Phone</span></div>
                            <span>{{ $pegawai->nomor_telepon }}</span>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        </div>
    </div>
  @endif

  @if (App::getLocale() == 'id')
    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Detail Pegawai</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Staff Pengajar", app()->getLocale() ) }}">Kembali</a></h1>
        </div>
        <hr class="border border-light dropdown-divider">
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="card bg-grey text-white border-danger" w-100>
                <img src="{{ $pegawai->foto }}" class="card-img-top" alt="...">
                <div class="card-body text-center mb-3">
                    <span class="card-text fw-bold fs-4">{{ $pegawai->nama }}</span>
                    <p class="card-text fs-5">{{ $pegawai->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="rounded p-3 bg-grey text-white">
                <h4 class="fw-bold">{{ $pegawai->nama }}</h4>
                <span class="fs-5">{{ $pegawai->jabatan->jabatan_ina }}</span>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Biografi</h4>
                <p class="fs-6">{{ $pegawai->biografi_ina }}</p>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Kontak</h4>
                <ol class="list-group list-group border-0 bg-grey">
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><span>Alamat Tempat Tinggal</span></div>
                            <span>{{ $pegawai->alamat }}</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><span>Nomor Telpon</span></div>
                            <span>{{ $pegawai->nomor_telepon }}</span>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        </div>
    </div>
  @endif
  
@endsection