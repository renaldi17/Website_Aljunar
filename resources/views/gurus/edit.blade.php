@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Guru</h1>

    <form action="{{ route('gurus.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mt-5">
            <div class="col-12 py-2">
                <input type="file" name="image" class="form-control"/>
            </div>
            <div class="col-12 col-sm-6 py-2">
                <input type="text" name="jabatan" class="form-control" value="{{ $guru->jabatan }}" placeholder="Jabatan" />
            </div>
            <div class="col-12 col-sm-6 py-2">
                <input type="text" name="nama" class="form-control" value="{{ $guru->nama }}" placeholder="Nama" />
            </div>
            <div class="col-12 col-sm-6 py-2">
                <select name="jenis_kelamin" class="form-control">
                    <option value="laki-laki" {{ $guru->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ $guru->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 py-2">
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $guru->tanggal_lahir }}" />
            </div>
        </div>

        <button type="submit" class="btn btn-secondary mt-3">Update</button>
    </form>
</div>
@endsection
