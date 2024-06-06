@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center">{{ $guru->nama }}</h1>

    <div class="row justify-content-center py-5">
        <div class="col-lg-6 col-md-8 shadow p-0">
            <div class="p-4">
                <img src="{{ asset('storage/' . $guru->image) }}" class="img-fluid" alt="{{ $guru->nama }}">
                <div class="mt-3">
                    <p><strong>Jabatan:</strong> {{ $guru->jabatan }}</p>
                    <p><strong>Nama:</strong> {{ $guru->nama }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $guru->jenis_kelamin }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ $guru->tanggal_lahir }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
