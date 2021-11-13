@extends('layouts/UserLayout')

@section('content')
@if (App::getLocale() == 'en')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">About Engineering Faculty</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Back</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-2">
          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#sejarah" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">History</button>
            <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#visi-misi" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Vision & Mision</button>
            <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tujuan-target" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Goal & Target</button>
            <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#denah" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Floor Plan</button>
          </div>
        </div>
        <div class="col-sm-12 col-md-10">
          <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="sejarah" role="tabpanel" aria-labelledby="v-pills-home-tab">
              {!! $tentang->tentang_eng !!}
            </div>
            <div class="tab-pane fade" id="visi-misi" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              {!! $tentang->visi_misi_eng !!}
              </p>
            </div>
            <div class="tab-pane fade" id="tujuan-target" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              {!! $tentang->tujuan_eng !!}
            </div>
            <div class="tab-pane fade" id="denah" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              {!! $tentang->denah_eng !!}
            </div>
          </div>
        </div>
    </div>
  </div>
@endif

@if (App::getLocale() == 'id')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Tentang Teknik</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-2">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#sejarah" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Sejarah</button>
          <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#visi-misi" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Visi & Misi</button>
          <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tujuan-target" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tujuan & Target</button>
          <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#denah" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Denah</button>
        </div>
      </div>
      <div class="col-sm-12 col-md-10">
        <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="sejarah" role="tabpanel" aria-labelledby="v-pills-home-tab">
            {!! $tentang->tentang_ina !!}
          </div>
          <div class="tab-pane fade" id="visi-misi" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            {!! $tentang->visi_misi_ina !!}
          </div>
          <div class="tab-pane fade" id="tujuan-target" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            {!! $tentang->tujuan_ina !!}
          </div>
          <div class="tab-pane fade" id="denah" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            {!! $tentang->denah_ina !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(e){
            $("p").css('color', '');
            $("span").css('color', '');
        });
    </script>
@endsection