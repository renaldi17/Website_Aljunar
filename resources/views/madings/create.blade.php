@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center">Buat Mading</h1>

    <form action="{{ route('madings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
            <div class="col-12 col-sm-6 py-2">
                <input type="text" name="judul" class="form-control" placeholder="Judul" required />
            </div>
            <div class="col-12 col-sm-6 py-2">
                <input type="text" name="kategori" class="form-control" placeholder="Kategori" required />
            </div>
            <div class="col-12 col-sm-6 py-2">
                <input type="date" name="tanggal" class="form-control" required />
            </div>
            <div class="col-12 py-2">
                <input type="file" name="image" class="form-control" required />
            </div>
            <div class="col-12 py-2">
                <textarea name="deskripsi" class="form-control" rows="6" placeholder="Masukkan Deskripsi" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary mt-3">Create</button>
    </form>
</div>
@endsection
