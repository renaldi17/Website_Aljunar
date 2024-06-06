@extends('layout')

@section('content')

<section>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/prestasi.css')}}">

    <!-- Current Page -->
    <section id="hero" class="px-0">
        <div class="container">
            <div class="hero-title">
                <div class="hero-text">Dashboard</div>
            </div>
        </div>
    </section>

    {{-- Item Admin --}}
    <section>
        <div class="container">
            <div class="row">
                <h2>Selamat datang, {{ Auth::user()->name}}</h2>

                <!-- Card untuk CRUD Mading -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0 py-3">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
                        <div class="custom-block d-flex flex-column justify-content-between">
                            <div class="custom-block-body">
                                <h5 class="judul">CRUD Mading</h5>
                                <p class="isi">Management halaman mading</p>
                            </div>
                            <a href="{{ route('madings.index') }}" class="custom-btn btn justify-content-center mt-auto">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Card untuk CRUD Guru -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0 py-3">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
                        <div class="custom-block d-flex flex-column justify-content-between">
                            <div class="custom-block-body">
                                <h5 class="judul">CRUD Guru</h5>
                                <p class="isi">Management halaman guru</p>
                            </div>
                            <a href="{{ route('gurus.index') }}" class="custom-btn btn justify-content-center mt-auto">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0 py-3">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
                        <div class="custom-block d-flex flex-column justify-content-between">
                            <div class="custom-block-body">
                                <h5 class="judul">CRUD Fasilitas</h5>
                                <p class="isi">Management halaman fasilitas</p>
                            </div>
                            <a href="{{ route('fasilitas.index') }}" class="custom-btn btn justify-content-center mt-auto">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0 py-3">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
                        <div class="custom-block d-flex flex-column justify-content-between">
                            <div class="custom-block-body">
                                <h5 class="judul">CRUD Daftar</h5>
                                <p class="isi">Management halaman Daftar</p>
                            </div>
                            <a href="{{ route('daftar.index') }}" class="custom-btn btn justify-content-center mt-auto">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0 py-3">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
                        <div class="custom-block d-flex flex-column justify-content-between">
                            <div class="custom-block-body">
                                <h5 class="judul">CRUD Daftar</h5>
                                <p class="isi">Management halaman Daftar</p>
                            </div>
                            <a href="{{ route('aduan.index') }}" class="custom-btn btn justify-content-center mt-auto">View More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>

@endsection
