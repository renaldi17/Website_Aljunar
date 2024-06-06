@extends('layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/detailberitastyle.css')}}">
    <!-- Esktrakulikuler -->
    <!-- Current Page "Home > Berita" -->
<section id="hero" class="px-0">
    <div class="container">
        <div class="hero-title">
            <div class="hero-text" class="nav-link active" href="Berita.html">Home > Berita > Ekstrakulikuler </div>
        </div>
    </div>
</section>

<!-- Body -->
<section>
<div class="container">
<div class="row justify-content-center py-5">
  <h1 class="Heading"> Pramuka </h1>
  <div class="kolom col-lg-12 col-md-12 shadow p-0">
  <div class="kolomisi">
  <span class="tag-single">Ekstrakulikuler</span>
  <img src="{{ asset('assets/image/eskul1.jpg')}}" class ="image" alt="">
      <div class="isi">
          Dalam semangat kebersamaan dan solidaritas menjelang bulan suci Ramadan, Poliklinik UPI CIBIRU menunjukkan kepedulian 
          mereka dengan mengadakan kegiatan bagi-bagi takjil kepada orang-orang yang datang pada tanggal 2 Desember 2023. 
          Kegiatan ini bertujuan untuk memberikan kebahagiaan kepada orang-orang sekitar serta meringankan beban mereka 
          dalam menjalani hari-hari di bulan Ramadan.
          <br>
          <br>
          Berbagai jenis takjil tradisional seperti kurma, kolak, dan minuman segar disiapkan dengan cermat oleh anggota KSR. 
          Takjil-takjil tersebut kemudian dibagikan kepada orang-orang sekitar di depan kampus UPI CIBIRU.
          <br>
          <br>
          Dengan semangat kepedulian dan berbagi ini, Poliklinik [Nama Poliklinik] tidak hanya menjadi tempat penyembuhan, 
          tetapi juga menjadi tempat dimana kebaikan dan kebersamaan terus bersemi. Semoga kegiatan seperti ini dapat terus 
          dilakukan dan menjadi inspirasi bagi banyak pihak untuk berbuat baik kepada sesama
      </div>
    <!-- Footer Container -->
      <div class="share-this-wrap">
        <div class="share-line">
          <div class="pr-4">
            <strong>SD IT</strong>
          </div>
          <div class="pl-4">
            <strong>Aljunar</strong>
          </div>
        </div>
      </div>
      <!-- End -->    
  </div>
  </div>
</div>
</div>
</section>
@endsection
