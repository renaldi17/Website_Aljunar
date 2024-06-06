@extends('layout')

@section('content')
<div class="container">
    <a href="{{ route('madings.create') }}" class="btn btn-primary">Create</a>

    <div class="table-responsive py-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Image</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($madings as $mading)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mading->judul }}</td>
                        <td>{{ $mading->kategori }}</td>
                        <td>{{ $mading->tanggal }}</td>
                        <td><img src="{{ asset('storage/' . $mading->image) }}" width="100" /></td>
                        <td>{{ $mading->deskripsi }}</td>
                        <td>
                            <a href="{{ route('madings.edit', $mading->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('madings.destroy', $mading->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('madings.show', $mading->id) }}" class="btn btn-info">View More</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
