@extends('layout')

@section('content')
    <div class="container">
        <h1 class="text-center">Buat Guru</h1>

        <form action="{{ route('gurus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-5">
                <div class="col-12 py-2">
                    <input type="file" name="image" class="form-control"/>
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" />
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <input type="text" name="nama" class="form-control" placeholder="Nama" />
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <select name="jenis_kelamin" class="form-control">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <input type="date" name="tanggal_lahir" class="form-control" />
                </div>
            </div>

            <button type="submit" class="btn btn-secondary mt-3">Create</button>
        </form>
    </div>
@endsection
