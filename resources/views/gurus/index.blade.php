@extends('layout')

@section('content')
<div class="container">
    <a href="{{ route('gurus.create') }}" class="btn btn-primary">Create</a>

    <div class="table-responsive py-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Jabatan</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gurus as $guru)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $guru->image) }}" width="100" /></td>
                        <td>{{ $guru->jabatan }}</td>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->jenis_kelamin }}</td>
                        <td>{{ $guru->tanggal_lahir }}</td>
                        <td>
                            <a href="{{ route('gurus.edit', $guru->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('gurus.destroy', $guru->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('gurus.show', $guru->id) }}" class="btn btn-info">View More</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
