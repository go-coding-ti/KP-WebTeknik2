@extends('layouts/UserLayout')

@section('content')

  @if (App::getLocale() == 'en')
    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Lecture Detail</h1>
        <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Staff Pengajar", app()->getLocale() ) }}">Back</a></h1>
        </div>
        <hr class="border border-light dropdown-divider">
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="card bg-grey text-white border-danger" w-100>
                <img src="{{ $staf->foto }}" class="card-img-top" alt="...">
                <div class="card-body text-center mb-3">
                    <span class="card-text fw-bold fs-4">{{ $staf->nama }}</span>
                    <p class="card-text fs-5">{{ $staf->email }}</p>
                </div>
                <div class="rounded p-3 bg-grey text-white mt-3">
                    <h4 class="fw-bold">Research</h4>
                    <ol class="list-group list-group border-0 bg-grey">
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                        <div class="ms-2 me-auto">
                            {{-- <div class="fw-bold"><span>1. Penelitian A</span></div> --}}
                            @foreach($bidangs as $bidang)
                                <span>{{ $bidang->bidang_eng }}</span>
                            @endforeach
                        </div>
                        </li>
                    </ol>
                </div>
                <div class="rounded p-3 bg-grey text-white">
                    <h4 class="fw-bold">Contact</h4>
                    <ol class="list-group list-group border-0 bg-grey">
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><span>Address</span></div>
                                <p>{{ $staf->alamat }}</p>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><span>Phone</span></div>
                                <span>{{ $staf->nomor_telepon }}</span>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="rounded p-3 bg-grey text-white">
                <h4 class="fw-bold">{{ $staf->nama }}</h4>
                @if($staf->jabatan == NULL)
                    @foreach($staf->staf_prodi as $prodi)
                        <span class="fs-5">{{ $prodi->prodi->prodi_eng }}</span>
                        <br>
                    @endforeach
                @elseif($staf->jabatan != NULL)
                    <span class="fs-5">{{ $staf->jabatan->jabatan_eng }}</span>
                @endif
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Biography</h4>
                <p class="fs-6">{{ $staf->biografi_eng }}</p>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Study</h4>
                <ol class="list-group list-group border-0 bg-grey">
                  <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold"><span>Bachelor</span></div>
                      <span>{{ $staf->pendidikan_s1 }}</span>
                    </div>
                    <span class="badge bg-primary rounded-pill">SI</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold"><span>Master</span></div>
                      <span>{{ $staf->pendidikan_s2 }}</span>
                    </div>
                    <span class="badge bg-primary rounded-pill">S2</span>
                  </li>
                  @if($staf->pendidikan_s3 != "")
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold"><span>Doctoral</span></div>
                        <span>{{ $staf->pendidikan_s3 }}</span>
                      </div>
                      <span class="badge bg-primary rounded-pill">S3</span>
                    </li>
                @endif
                </ol>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Publication (Last 5 Years)</h4>
                <ol class="list-group list-group border-0 bg-grey">
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                        {{-- <div class="fw-bold"><span>1. Publikasi Jurnal Smart Posyandu</span></div> --}}
                        @foreach($penelitians as $penelitian)
                            <span>{{ $penelitian->penelitian }}</span>
                        @endforeach
                    </div>
                    </li>
                </ol>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3 text-end">
                <a href="{{ $staf->sinta }}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                <a href="{{ $staf->scopus }}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
            </div>
        </div>
        </div>
    </div>
  @endif

  @if (App::getLocale() == 'id')
    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Detail Dosen</h1>
        <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Staff Pengajar", app()->getLocale() ) }}">Kembali</a></h1>
        </div>
        <hr class="border border-light dropdown-divider">
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="card bg-grey text-white border-danger" w-100>
                <img src="{{ $staf->foto }}" class="card-img-top" alt="...">
                <div class="card-body text-center mb-3">
                    <span class="card-text fw-bold fs-4">{{ $staf->nama }}</span>
                    <p class="card-text fs-5">{{ $staf->email }}</p>
                </div>
                <div class="rounded p-3 bg-grey text-white mt-3">
                    <h4 class="fw-bold">Bidang Penelitian</h4>
                    <ol class="list-group list-group border-0 bg-grey">
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                        <div class="ms-2 me-auto">
                            {{-- <div class="fw-bold"><span>1. Penelitian A</span></div> --}}
                            @foreach($bidangs as $bidang)
                                <span>{{ $bidang->bidang }}</span>
                            @endforeach
                        </div>
                        </li>
                    </ol>
                </div>
                <div class="rounded p-3 bg-grey text-white">
                    <h4 class="fw-bold">Kontak</h4>
                    <ol class="list-group list-group border-0 bg-grey">
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><span>Alamat Tempat Tinggal</span></div>
                                <p>{{ $staf->alamat }}</p>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><span>Nomor Telpon</span></div>
                                <span>{{ $staf->nomor_telepon }}</span>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="rounded p-3 bg-grey text-white">
                <h4 class="fw-bold">{{ $staf->nama }}</h4>
                @if($staf->jabatan == NULL)
                    @foreach($staf->staf_prodi as $prodi)
                        <span class="fs-5">{{ $prodi->prodi->prodi_ina }}</span>
                        <br>
                    @endforeach
                @elseif($staf->jabatan != NULL)
                    <span class="fs-5">{{ $staf->jabatan->jabatan_ina }}</span>
                @endif
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Biografi</h4>
                <p class="fs-6">{{ $staf->biografi_ina }}</p>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Pendidikan</h4>
                <ol class="list-group list-group border-0 bg-grey">
                  <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold"><span>Sarjana</span></div>
                      <span>{{ $staf->pendidikan_s1 }}</span>
                    </div>
                    <span class="badge bg-primary rounded-pill">SI</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold"><span>Magister</span></div>
                      <span>{{ $staf->pendidikan_s2 }}</span>
                    </div>
                    <span class="badge bg-primary rounded-pill">S2</span>
                  </li>
                  @if($staf->pendidikan_s3 != "")
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold"><span>Doktoral</span></div>
                        <span>{{ $staf->pendidikan_s3 }}</span>
                      </div>
                      <span class="badge bg-primary rounded-pill">S3</span>
                    </li>
                @endif
                </ol>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Publikasi (5 Tahun Terakhir)</h4>
                <ol class="list-group list-group border-0 bg-grey">
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                        {{-- <div class="fw-bold"><span>1. Publikasi Jurnal Smart Posyandu</span></div> --}}
                        @foreach($penelitians as $penelitian)
                            <span>{{ $penelitian->penelitian }}</span>
                        @endforeach
                    </div>
                    </li>
                </ol>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3 text-end">
                <a href="{{ $staf->sinta }}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                <a href="{{ $staf->scopus }}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
            </div>
        </div>
        </div>
    </div>
  @endif
  
@endsection