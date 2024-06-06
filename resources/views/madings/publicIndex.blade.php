@extends('layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/prestasi.css')}}">

<section id="hero" class="px-0">
    <div class="container">
        <div class="hero-title">
            <div class="hero-text">Mading</div>
        </div>
    </div>
</section>

<section class="section-padding" id="section_3">
  <div class="container">
      <div class="row justify-content-center py-3">
          @foreach ($madings as $mading)
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0">
                <div class="custom-block-wrap">
                  <span class="tag-single">{{ $mading->kategori }}</span>
                    <img src="{{ asset('storage/' . $mading->image) }}" class="custom-block-image img-fluid" alt="{{ $mading->judul }}">

                    <div class="custom-block d-flex flex-column justify-content-between">
                        <div class="custom-block-body">
                            <h6 class="tanggal">{{ $mading->tanggal }}</h6>
                            <h5 class="judul">{{ $mading->judul }}</h5>
                            <p class="isi">{{ Str::limit($mading->deskripsi, 100) }}</p>
                        </div>
            
                        <a href="{{ route('madings.show', $mading->id) }}" class="custom-btn btn justify-content-center mt-auto ms-3 me-3">View More</a>
                    </div>
                </div>
            </div>
          @endforeach
      </div>
  </div>
</section>

@endsection
