@extends('layout')

@section('content')
<div class="container">
    <h1>Detail Fasilitas</h1>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <div><img src="{{ asset('storage/' . $fasilitas->image) }}" height="300" width="300" alt="{{ $fasilitas->nama }}"></div>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <div>{{ $fasilitas->nama }}</div>
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <div>{{ $fasilitas->keterangan }}</div>
    </div>
    <a href="{{ route('fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
