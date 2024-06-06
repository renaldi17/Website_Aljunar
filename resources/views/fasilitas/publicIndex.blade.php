@extends('layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/fasilitas.css')}}">
    <!-- Current Page -->
    <section id="hero" class="px-0">
        <div class="container">
            <div class="hero-title">
                <div class="hero-text">Fasilitas</div>
            </div>
        </div>
    </section>

    <!-- Fasilitas -->
    <section id="fasilitas" class="px-0 py-5">
        <div class="container">
            <div class="row justify-content-center py-1">
                @foreach($fasilitas as $item)
                    <div class="col-lg-2 col-md-4 col-12 me-3">
                        <div class="foto">
                            <img src="{{ asset('storage/' . $item->image) }}" height="200" width="200" alt="{{ $item->nama }}">
                            <div>{{ $item->nama }}</div>
                            <div>{{ $item->keterangan }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
