@extends('layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/prestasi.css')}}">

      <!-- Current Page -->
      <section id="hero" class="px-0">
        <div class="container">
            <div class="hero-title">
                <div class="hero-text">Guru</div>
            </div>
        </div>
    </section>

    <!-- Guru -->
    <section class="section-padding" id="section_3">
      <div class="container">
          <div class="row justify-content-center py-3">
              @foreach ($gurus as $guru)
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('storage/' . $guru->image) }}" class="custom-block-image img-fluid" alt="{{ $guru->nama }}">

                        <div class="custom-block d-flex flex-column justify-content-between">
                            <div class="custom-block-body">
                                <h5 class="judul">{{ $guru->nama }}</h5>
                                <p class="isi">{{ $guru->jabatan }}</p>
                                <p class="isi">{{ $guru->jenis_kelamin }}</p>
                                <p class="isi">{{ $guru->tanggal_lahir }}</p>
                            </div>
                
                            <a href="{{ route('gurus.show', $guru->id) }}" class="custom-btn btn justify-content-center mt-auto">View More</a>
                        </div>
                    </div>
                </div>
              @endforeach
          </div>
      </div>
  </section>
@endsection
