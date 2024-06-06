@extends('layout')

@section('content')
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css')}}">

    <!-- Hero -->
    <section id="hero" class="px-0">
            <div class="container text-center text-white">
                <div class="hero-title">
                    <div class="hero-text">Selamat Datang di <br> Al Junar</div>
                    <h4>Sekolah Dasar dengan konsep Islam</h4>
                </div>
            </div>
      </section>
  <!-- Program -->
      <section id="program" style="margin-top: -30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-item-center" >
                        <div>
                            <h5>Akreditasi <br>A</h5>
                        </div>
                        <img src="" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-item-center" >
                        <div>
                            <h5>Guru <br>Berpengalaman</h5>
                        </div>
                        <img src="" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-item-center" >
                        <div>
                            <h5>500 <br>siswa</h5>
                        </div>
                        <img src="" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                  <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-item-center" >
                      <div>
                          <h5>Kurikulum <br>Merdeka</h5>
                      </div>
                      <img src="" height="55" width="55" alt="">
                  </div>
              </div>
              <div class="col-lg-3">
            </div>
        </div>
      </section>
  <!-- Join -->
      <section id= "join" class="py-S">
        <div class= "container py-5">
          <div class="row d-flex align-items-center">
            <div class= "col-lg-6">
              <div class="d-flex align-items-center mb-3">
                <div class= "stripe me-2"></div>
                <h5>Daftar Siswa</h5>
                </div>
              <h1 class= "fw-bold mb-2">Gabung bersama kami, menjadi siswa yang berakhlak</h1>
              <p class= "mb-3">
                SD Al-Junar merupakan sekolah terbaik di Ujung Berung, dengan para guru yang ahli di bidangnya
              </p>
              <a class= "btn btn-outline-success" href="/daftar">Daftar</a>
            </div>
            <div class= "col-lg-6">
              <img src="" alt="">
            </div>
          </div>
        </div>
      </section>
  <!-- Foto Eskul -->
      <section id="foto-kegiatan" class="section-foto-kegiatan parallax">
        <div class="container">
        
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white"> Foto Esktrakulikuler</h5>
                </div>
                <div>
                    <a href="" class="btn btn-outline-white">Esktrakulikuler Lainnya</a>
                </div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-6 col-6">
                <img src="" class="img-fluid" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-6">
                <img src="" class="img-fluid" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-6">
                <img src="" class="img-fluid" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-6">
                <img src="" class="img-fluid" alt="">
              </div>
            </div>
        </div>
      </section>
  <!-- Foto Fasil -->
      <section id="foto Fasilitas" class="py-5">
        <div class="container py-5">
          <div class="text-center mb-5">
            <h3 class="fw-bold">Fasilitas</h3>
          </div>
          <img src="listfasil.png" class="img-fluid py-5" alt="">
          <div class="text-center">
              <a href="/fasilitas" class="btn btn-outline-success">Fasilitas Lainnya</a>
          </div>
        </div>
      </section>
@endsection

