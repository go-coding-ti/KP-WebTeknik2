@extends('layouts/UserLayout')

@section('content')
<div class="container mt-4 pt-4">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1627532683462-6ab6032856bb?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyMHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyNXx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1627493840665-7f6a15fe0414?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8aG1lbnZRaFVteE18fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
          </div>
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
@endsection