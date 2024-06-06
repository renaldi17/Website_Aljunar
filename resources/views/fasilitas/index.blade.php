@extends('layout')

@section('content')
<div class="container">
    <h1>Data Fasilitas</h1>
    <a href="{{ route('fasilitas.create') }}" class="btn btn-primary mb-3">Tambah Fasilitas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fasilitas as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="{{ asset('storage/' . $item->image) }}" height="100" width="100" alt="{{ $item->nama }}"></td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('fasilitas.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('fasilitas.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="{{ route('fasilitas.show', $item->id) }}" class="btn btn-info">Lihat</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
