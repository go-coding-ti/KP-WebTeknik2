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
                <img src="https://images.unsplash.com/photo-1611086551388-f0cf4d044c76?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM3fFM0TUtMQXNCQjc0fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                <div class="card-body text-center mb-3">
                    <span class="card-text fw-bold fs-4">I Gede Hadi Darmawan</span>
                    <p class="card-text fs-5">dosen@gmail.com</p>
                </div>
                <div class="rounded p-3 bg-grey text-white mt-3">
                    <h4 class="fw-bold">Research</h4>
                    <ol class="list-group list-group border-0 bg-grey">
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><span>1. Penelitian A</span></div>
                            <span>Penelitian mengenai suatu bidang A</span>
                        </div>
                        </li>
                    </ol>
                </div>
                <div class="rounded p-3 bg-grey text-white">
                    <h4 class="fw-bold">Contact</h4>
                    <ol class="list-group list-group border-0 bg-grey">
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><span>Home Address</span></div>
                                <span>Jl. Raya Sempidi, Badung</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><span>Phone</span></div>
                                <span>081234567890</span>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="rounded p-3 bg-grey text-white">
                <h4 class="fw-bold">Hadi Darmawan</h4>
                <span class="fs-5">Information Technology</span>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Biography</h4>
                <p class="fs-6">Isi Biografi</p>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Education</h4>
                <ol class="list-group list-group border-0 bg-grey">
                  <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold"><span>Bachelor</span></div>
                      <span>Teknologi Informasi, Fakultas Teknik, Universitas Udayana</span>
                    </div>
                    <span class="badge bg-primary rounded-pill">SI</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold"><span>Magister</span></div>
                      <span>Software Engineering, Fakultas Teknik, ITB</span>
                    </div>
                    <span class="badge bg-primary rounded-pill">S2</span>
                  </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold"><span>Doktoral</span></div>
                        <span>MIT University</span>
                      </div>
                      <span class="badge bg-primary rounded-pill">S3</span>
                    </li>
                </ol>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Publication (Last 5 Years)</h4>
                <ol class="list-group list-group border-0 bg-grey">
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><span>1. Publikasi Jurnal Smart Posyandu</span></div>
                        <span>Publikasi jurnal hasil penelitian mengenai project Smart Posyandu yang merupakan pemodernisasi Posyandu.</span>
                    </div>
                    </li>
                </ol>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3 text-end">
                <a href="" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                <a href="" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
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
                <img src="https://images.unsplash.com/photo-1611086551388-f0cf4d044c76?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM3fFM0TUtMQXNCQjc0fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                <div class="card-body text-center mb-3">
                    <span class="card-text fw-bold fs-4">I Gede Hadi Darmawan</span>
                    <p class="card-text fs-5">dosen@gmail.com</p>
                </div>
                <div class="rounded p-3 bg-grey text-white mt-3">
                    <h4 class="fw-bold">Bidang Penelitian</h4>
                    <ol class="list-group list-group border-0 bg-grey">
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><span>1. Penelitian A</span></div>
                            <span>Penelitian mengenai suatu bidang A</span>
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
                                <span>Jl. Raya Sempidi, Badung</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><span>Nomor Telpon</span></div>
                                <span>081234567890</span>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="rounded p-3 bg-grey text-white">
                <h4 class="fw-bold">Hadi Darmawan</h4>
                <span class="fs-5">Information Technology</span>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Biografi</h4>
                <p class="fs-6">Isi Biografi</p>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Pendidikan</h4>
                <ol class="list-group list-group border-0 bg-grey">
                  <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold"><span>Sarjana</span></div>
                      <span>Teknologi Informasi, Fakultas Teknik, Universitas Udayana</span>
                    </div>
                    <span class="badge bg-primary rounded-pill">SI</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold"><span>Magister</span></div>
                      <span>Software Engineering, Fakultas Teknik, ITB</span>
                    </div>
                    <span class="badge bg-primary rounded-pill">S2</span>
                  </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold"><span>Doktoral</span></div>
                        <span>MIT University</span>
                      </div>
                      <span class="badge bg-primary rounded-pill">S3</span>
                    </li>
                </ol>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3">
                <h4 class="fw-bold">Publikasi (5 Tahun Terakhir)</h4>
                <ol class="list-group list-group border-0 bg-grey">
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><span>1. Publikasi Jurnal Smart Posyandu</span></div>
                        <span>Publikasi jurnal hasil penelitian mengenai project Smart Posyandu yang merupakan pemodernisasi Posyandu.</span>
                    </div>
                    </li>
                </ol>
            </div>
            <div class="rounded p-3 bg-grey text-white mt-3 text-end">
                <a href="" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                <a href="" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
            </div>
        </div>
        </div>
    </div>
  @endif
  
@endsection