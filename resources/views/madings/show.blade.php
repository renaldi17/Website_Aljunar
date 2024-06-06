@extends('layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/detailberitastyle.css')}}">
<section id="hero" class="px-0">
    <div class="container">
        <div class="hero-title">
            <div class="hero-text">Home > Berita > Detail Mading</div>
        </div>
    </div>
</section>

<section>
<div class="container">
<div class="row justify-content-center py-5">
  <h1 class="Heading">{{ $mading->judul }}</h1>
  <div class="kolom col-lg-12 col-md-12 shadow p-0">
  <div class="kolomisi">
  <span class="tag-single">{{ $mading->kategori }}</span>
  <img src="{{ asset('storage/' . $mading->image) }}" class="image" alt="{{ $mading->judul }}">
    <h6 class="tanggal">{{ $mading->tanggal }}</h6>
      <div class="isi">
          {{ $mading->deskripsi }}
      </div>
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
  </div>
  </div>
</div>
</div>
</section>
@endsection
