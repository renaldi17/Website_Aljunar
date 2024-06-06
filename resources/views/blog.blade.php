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
                <div class="hero-text">Mading</div>
            </div>
        </div>
    </section>

    <!-- Prestasi -->
    <section class="section-padding" id="section_3">
      <div class="container">
          <!-- Baris untuk prestasi 1, 2, 3 -->
          <div class="row justify-content-center">
              <!-- Prestasi 1 -->
              <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0">
                  <div class="custom-block-wrap">
                      <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">

                      <div class="custom-block d-flex flex-column justify-content-between">
                          <div class="custom-block-body">
                              <h6 class="tanggal">02/12/23</h6>
                              <h5 class="judul">Juara 1 Futsal</h5>
                              <p class="isi">Renaldi Pasya Darmansyah
                              </p>
                          </div>
              
                          <a href="/detail" class="custom-btn btn justify-content-center mt-auto">View More</a>
                      </div>
                  </div>
              </div>          

              <!-- Prestasi 2 -->
              <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0">
                  <div class="custom-block-wrap">
                      <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
              
                      <div class="custom-block d-flex flex-column justify-content-between">
                        <div class="custom-block-body">
                            <h6 class="tanggal">02/12/23</h6>
                            <h5 class="judul">Juara 1 Futsal</h5>
                            <p class="isi">Renaldi Pasya Darmansyah</p>
                        </div>
            
                        <a href="" class="custom-btn btn justify-content-center mt-auto">View More</a>
                      </div>
                  </div>
              </div>        

              <!-- Prestasi 3 -->
              <div class="col-lg-3 col-md-6 col-12 shadow p-0">
                  <div class="custom-block-wrap">
                      <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
              
                      <div class="custom-block d-flex flex-column justify-content-between">
                        <div class="custom-block-body">
                            <h6 class="tanggal">02/12/23</h6>
                            <h5 class="judul">Juara 1 Futsal</h5>
                            <p class="isi">Renaldi Pasya Darmansyah</p>
                        </div>
            
                        <a href="" class="custom-btn btn justify-content-center mt-auto">View More</a>
                      </div>
                  </div>
              </div>        
          </div>

          <!-- Baris untuk prestasi 4, 5, 6 -->
          <div class="row py-5 justify-content-center">
              <!-- Prestasi 4 -->
              <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0">
                  <div class="custom-block-wrap">
                    <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
              
                    <div class="custom-block d-flex flex-column justify-content-between">
                      <div class="custom-block-body">
                          <h6 class="tanggal">02/12/23</h6>
                          <h5 class="judul">Juara 1 Futsal</h5>
                          <p class="isi">Renaldi Pasya Darmansyah</p>
                      </div>
          
                      <a href="" class="custom-btn btn justify-content-center mt-auto">View More</a>
                    </div>
                  </div>
              </div>      

              <!-- Prestasi 5 -->
              <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 me-lg-3 shadow p-0">
                  <div class="custom-block-wrap">
                      <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
              
                      <div class="custom-block d-flex flex-column justify-content-between">
                        <div class="custom-block-body">
                            <h6 class="tanggal">02/12/23</h6>
                            <h5 class="judul">Juara 1 Futsal</h5>
                            <p class="isi">Renaldi Pasya Darmansyah</p>
                        </div>
            
                        <a href="" class="custom-btn btn justify-content-center mt-auto">View More</a>
                      </div>
                  </div>
              </div>         

              <!-- Prestasi 6 -->
              <div class="col-lg-3 col-md-6 col-12 shadow p-0">
                  <div class="custom-block-wrap">
                      <img src="{{ asset('assets/image/prestasi1.jpg')}}" class="custom-block-image img-fluid" alt="">
              
                      <div class="custom-block d-flex flex-column justify-content-between">
                        <div class="custom-block-body">
                            <h6 class="tanggal">02/12/23</h6>
                            <h5 class="judul">Juara 1 Futsal</h5>
                            <p class="isi">Renaldi Pasya Darmansyah</p>
                        </div>
            
                        <a href="" class="custom-btn btn justify-content-center mt-auto">View More</a>
                      </div>
                  </div>
              </div>        
          </div>
      </div>
  </section>
@endsection
    