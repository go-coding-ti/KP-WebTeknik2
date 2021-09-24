@if (App::getLocale() == 'en')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-auto">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Lecture</h1>
      <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route("Agenda", app()->getLocale() ) }}">See All</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row row-cols-1 row-cols-lg-3 px-3 pt-2">
        @foreach($dosens as $dosen)
            <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                    <a href="#" class="link-light text-decoration-none ">
                    <img src="{{ $dosen->foto }}" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">{{ $dosen->nama }}</h5>
                        @foreach($dosen->staf_prodi as $prodi)
                            <p class="card-text fw-bold mt-3">{{ $prodi->prodi->prodi_eng ?? '-' }}</p>
                        @endforeach
                    </div>
                    </a>
                    <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a  class="btn btn-primary p-1 my-1" href="">See More</a>
                    <div>
                        <a href="{{ $dosen->sinta }}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                        <a href="{{ $dosen->scopus }}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
@endif

@if (App::getLocale() == 'id')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-auto">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Dosen</h1>
      <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route("Agenda", app()->getLocale() ) }}">See All</a></h1>
    </div>
    <hr class="border border-light dropdown-divider mt-0">
  </div>
  <div class="container">
    <div class="row row-cols-1 row-cols-lg-3 px-3 pt-2">
        @foreach($dosens as $dosen)
        <div class="col p-0 px-1 mb-3">
            <div class="card bg-grey hover border-0 h-100">
                <a href="#" class="link-light text-decoration-none ">
                <img src="{{ $dosen->foto }}" class="card-img-top mb-1" alt="...">
                <div class="card-body p-3 text-center">
                    <h5 class="card-title fw-bold fs-5">{{ $dosen->nama }}</h5>
                    @foreach($dosen->staf_prodi as $prodi)
                        <p class="card-text fw-bold mt-3">{{ $prodi->prodi->prodi_ina ?? '-' }}</p>
                    @endforeach
                </div>
                </a>
                <div class="card-footer p-3 d-flex justify-content-between border-0">
                <a  class="btn btn-primary p-1 my-1" href="">Lihat Selengkapnya</a>
                <div>
                    <a href="{{ $dosen->sinta }}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                    <a href="{{ $dosen->scopus }}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
  </div>
@endif