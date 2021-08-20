@extends('layouts/UserLayout')

@section('content')

@if (App::getLocale() == 'en')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Teaching & Staff</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Back</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="card-header d-flex justify-content-center justify-content-md-start border-light">
      <ul class="nav nav-pills small">
          <li class="nav-item"><a class="nav-link p-2 active" id="tab-data-pimpinan" href="#data-pimpinan" data-toggle="tab">Leader</a></li>
          <li class="nav-item"><a class="nav-link p-2" id="tab-data-tu" href="#data-tu" data-toggle="tab">Staff</a></li>
          <li class="nav-item"><a class="nav-link p-2" id="tab-data-dosen" href="#data-dosen" data-toggle="tab">Lecture</a></li>
          <li class="nav-item"><a class="nav-link p-2" id="tab-data-dosen-prodi" href="#data-dosen-prodi" data-toggle="tab">Lecture Department</a></li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content">
          <div class="tab-pane active" id="data-pimpinan">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
              @foreach($stafs as $staf)
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                        <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See More</a>
                    <div>
                      <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                      <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="tab-pane active" id="data-tu">
            <div class="row">
              <div class="col-sm-12 col-md-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#sub_bidang_a" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Education & Collaboration Division</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sub_bidang_b" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">General & Financial Division</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sub_bidang_c" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">The Planning & Information Systems Division</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sub_bidang_d" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Students Division</button>
                </div>
              </div>
              <div class="col-sm-12 col-md-10">
                <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="sub_bidang_a" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sub_bidang_b" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sub_bidang_c" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sub_bidang_d" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane active" id="data-dosen">
            <div class="row">
              <div class="col-sm-12 col-md-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#semua-dosen" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">All Lecture</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#guru-besar" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Professor</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#dosen-biasa" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">General Lecture</button>
                </div>
              </div>
              <div class="col-sm-12 col-md-10">
                <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="semua-dosen" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="guru-besar" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="dosen-biasa" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane active" id="data-dosen-prodi">
            <div class="row">
              <div class="col-sm-12 col-md-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#arsitektur" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Architecture Engineering</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sipil" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Civil Engineering</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#mesin" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Mechanical Engineering</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#elektro" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Electrical Engineering</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#ti" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Information Technology</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#lingkungan" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Enviromental Engineering</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#industri" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Industrial Engineering</button>
                </div>
              </div>
              <div class="col-sm-12 col-md-10">
                <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="arsitektur" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sipil" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="mesin" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="elektro" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="ti" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="lingkungan" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="industri" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_eng ?? '-'}}</p>
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endif

@if (App::getLocale() == 'id')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengajar & Staff</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="card-header d-flex justify-content-center justify-content-md-start border-light">
      <ul class="nav nav-pills small">
          <li class="nav-item"><a class="nav-link p-2 active" id="tab-data-pimpinan" href="#data-pimpinan" data-toggle="tab">Pimpinan</a></li>
          <li class="nav-item"><a class="nav-link p-2" id="tab-data-tu" href="#data-tu" data-toggle="tab">Tata Usaha</a></li>
          <li class="nav-item"><a class="nav-link p-2" id="tab-data-dosen" href="#data-dosen" data-toggle="tab">Dosen</a></li>
          <li class="nav-item"><a class="nav-link p-2" id="tab-data-dosen-prodi" href="#data-dosen-prodi" data-toggle="tab">Dosen Prodi</a></li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content">
          <div class="tab-pane active" id="data-pimpinan">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
              @foreach($managements as $staf)
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                        <p class="card-text fw-bold mt-3">{{$staf->jabatan->jabatan_ina ?? '-'}}</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                    <div>
                      <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                      <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="tab-pane active" id="data-tu">
            <div class="row">
              <div class="col-sm-12 col-md-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#kepala_bidang" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Kepala Bagian Tata Usaha</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sub_bidang_a" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sub Bagian Pendidikan & Kerjasama</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sub_bidang_b" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sub Bagian Umum & Keuangan</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sub_bidang_c" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sub Bagian Perencanaan & Sistem Informasi</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sub_bidang_d" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sub Bagian Kemahasiswaan</button>
                </div>
              </div>
              <div class="col-sm-12 col-md-10">
                <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="kepala_bidang" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2 text-center">
                      @foreach($pegawais as $staf)
                        @if($staf->jabatan->sub_bidang == 'kepala_bidang')
                          <div class="col p-0 px-1 mb-3">
                            <div class="card bg-grey hover border-0 h-100">
                              <a href="#" class="link-light text-decoration-none ">
                                <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                                <div class="card-body p-3 text-center">
                                    <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                    <p class="card-text fw-bold mt-3">{{$staf->jabatan->jabatan_ina ?? '-'}}</p>
                                </div>
                              </a>
                              <div class="card-footer p-3 d-flex justify-content-between border-0">
                                <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                              </div>
                            </div>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="sub_bidang_a" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($pegawais as $staf)
                        @if($staf->jabatan->sub_bidang == 'pendidikan_dan_kerjasama')
                          <div class="col p-0 px-1 mb-3">
                            <div class="card bg-grey hover border-0 h-100">
                              <a href="#" class="link-light text-decoration-none ">
                                <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                                <div class="card-body p-3 text-center">
                                    <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                    <p class="card-text fw-bold mt-3">{{$staf->jabatan->jabatan_ina ?? '-'}}</p>
                                </div>
                              </a>
                              <div class="card-footer p-3 d-flex justify-content-between border-0">
                                <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                              </div>
                            </div>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sub_bidang_b" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($pegawais as $staf)
                        @if($staf->jabatan->sub_bidang == 'umum_dan_keuangan')
                          <div class="col p-0 px-1 mb-3">
                            <div class="card bg-grey hover border-0 h-100">
                              <a href="#" class="link-light text-decoration-none ">
                                <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                                <div class="card-body p-3 text-center">
                                    <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                    <p class="card-text fw-bold mt-3">{{$staf->jabatan->jabatan_ina ?? '-'}}</p>
                                </div>
                              </a>
                              <div class="card-footer p-3 d-flex justify-content-between border-0">
                                <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                              </div>
                            </div>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sub_bidang_c" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($pegawais as $staf)
                        @if($staf->jabatan->sub_bidang == 'perencanaan_dan_sistem_informasi')
                          <div class="col p-0 px-1 mb-3">
                            <div class="card bg-grey hover border-0 h-100">
                              <a href="#" class="link-light text-decoration-none ">
                                <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                                <div class="card-body p-3 text-center">
                                    <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                    <p class="card-text fw-bold mt-3">{{$staf->jabatan->jabatan_ina ?? '-'}}</p>
                                </div>
                              </a>
                              <div class="card-footer p-3 d-flex justify-content-between border-0">
                                <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                              </div>
                            </div>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sub_bidang_d" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($pegawais as $staf)
                        @if($staf->jabatan->sub_bidang == 'kemahasiswaan')
                          <div class="col p-0 px-1 mb-3">
                            <div class="card bg-grey hover border-0 h-100">
                              <a href="#" class="link-light text-decoration-none ">
                                <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                                <div class="card-body p-3 text-center">
                                    <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                    <p class="card-text fw-bold mt-3">{{$staf->jabatan->jabatan_ina ?? '-'}}</p>
                                </div>
                              </a>
                              <div class="card-footer p-3 d-flex justify-content-between border-0">
                                <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                              </div>
                            </div>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane active" id="data-dosen">
            <div class="row">
              <div class="col-sm-12 col-md-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#semua-dosen" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Semua Dosen</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#guru-besar" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Guru Besar</button>
                  <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#dosen-biasa" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Dosen Biasa</button>
                </div>
              </div>
              <div class="col-sm-12 col-md-10">
                <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="semua-dosen" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($stafs as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5 mb-2">{{$staf->nama}}</h5>
                                @foreach($staf->staf_prodi as $prodi)
                                  <p class="card-text fw-bold">{{$prodi->prodi->prodi_ina ?? '-'}}</p>
                                @endforeach
                                
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="guru-besar" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($guru_besar as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                @foreach($staf->staf_prodi as $prodi)
                                  <p class="card-text fw-bold">{{$prodi->prodi->prodi_ina ?? '-'}}</p>
                                @endforeach
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="tab-pane fade" id="dosen-biasa" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                      @foreach($dosen as $staf)
                      <div class="col p-0 px-1 mb-3">
                        <div class="card bg-grey hover border-0 h-100">
                          <a href="#" class="link-light text-decoration-none ">
                            <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                @foreach($staf->staf_prodi as $prodi)
                                  <p class="card-text fw-bold">{{$prodi->prodi->prodi_ina ?? '-'}}</p>
                                @endforeach
                            </div>
                          </a>
                          <div class="card-footer p-3 d-flex justify-content-between border-0">
                            <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                            <div>
                              <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                              <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane active" id="data-dosen-prodi">
            <div class="row">
              <div class="col-sm-12 col-md-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  @foreach($prodis as $prodi)
                    <button class="nav-link @if($loop->iteration == 1) active @endif text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#prodi{{ $prodi->id }}" type="button" role="tab" aria-controls="@if($loop->iteration == 1) v-pills-home @else v-pills-profile @endif" aria-selected="@if($loop->iteration == 1) true @else false @endif">{{ $prodi->prodi_ina }}</button>
                  @endforeach
                </div>
              </div>
              <div class="col-sm-12 col-md-10">
                <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
                  @foreach($prodis as $prodi)
                    <div class="tab-pane fade show active" id="prodi{{ $prodi->id }}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <div class="row row-cols-1 row-cols-lg-3 row-cols-lg-3 px-3 pt-2">
                        @foreach($stafs as $staf)
                          @foreach($staf->staf_prodi as $staf_prodi)
                            @if($prodi->id == $staf_prodi->id_prodi)
                              <div class="col p-0 px-1 mb-3">
                                <div class="card bg-grey hover border-0 h-100">
                                  <a href="#" class="link-light text-decoration-none ">
                                    <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                                    <div class="card-body p-3 text-center">
                                        <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                                        {{-- <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_ina ?? '-'}}</p> --}}
                                    </div>
                                  </a>
                                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                                    <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">Lihat Lebih Lanjut</a>
                                    <div>
                                      <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                                      <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                          @endforeach
                        @endforeach
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endif
@endsection