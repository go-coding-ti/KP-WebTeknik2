@extends('layouts/UserLayout')

@section('content')
<div class="container mt-4 pt-4">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($slideshows as $slideshow)
          <div class="carousel-item @if($loop->iteration==1) active @endif">
            <img src="{{ $slideshow->slide_show }}" class="d-block w-100" alt="...">
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

    {{-- HERO PANEL --}}
        @include('layouts/Hero')
    {{-- HERO PANEL End --}}

    {{-- VIDEO PANEL --}}
        @include('layouts/Video')
    {{-- VIDEO PANEL End --}}

    {{-- TRENDING --}}
        @include('layouts/Trending')
    {{-- TRENDING End --}}

    {{-- HIGHLIGHTS --}}
        @include('layouts/Highlight')
    {{-- HIGHLIGHTS End --}}

    {{-- NEWS --}}
        @include('layouts/News')
    {{-- NEWS End --}}

    {{-- PIMPINAN --}}
    @include('layouts/Pimpinan')
    {{-- PIMPINAN End --}}

    {{-- DOSEN --}}
      @include('layouts/Dosen')
    {{-- DOSEN End --}}

    {{-- STAFF --}}
      @include('layouts/Staff')
    {{-- STAFF End --}}
@endsection