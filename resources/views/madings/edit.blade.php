@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Mading</h1>

    <form action="{{ route('madings.update', $mading->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mt-5">
            <div class="col-12 col-sm-6 py-2">
                <input type="text" name="judul" class="form-control" value="{{ $mading->judul }}" placeholder="Judul" required />
            </div>
            <div class="col-12 col-sm-6 py-2">
                <input type="text" name="kategori" class="form-control" value="{{ $mading->kategori }}" placeholder="Kategori" required />
            </div>
            <div class="col-12 col-sm-6 py-2">
                <input type="date" name="tanggal" class="form-control" value="{{ $mading->tanggal }}" required />
            </div>
            <div class="col-12 py-2">
                <input type="file" name="image" class="form-control" />
                @if ($mading->image)
                    <img src="{{ asset('storage/' . $mading->image) }}" width="100" class="mt-2" />
                @endif
            </div>
            <div class="col-12 py-2">
                <textarea name="deskripsi" class="form-control" rows="6" placeholder="Masukkan Deskripsi" required>{{ $mading->deskripsi }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary mt-3">Update</button>
    </form>
</div>
@endsection
