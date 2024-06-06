@extends('layout')

@section('content')
<div class="container">
    <a href="{{ route('daftar.publicIndex') }}" class="btn btn-primary">Tambah Data</a>

    <div class="table-responsive py-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>NIK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Berkebutuhan Khusus</th>
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>Jarak Ke Sekolah</th>
                    <th>Jumlah Saudara</th>
                    <th>Alamat</th>
                    <th>Alat Transportasi</th>
                    <th>Jenis Tempat Tinggal</th>
                    <th>No. Telepon</th>
                    <th>Email</th>
                    <th>Penerima KPS</th>
                    <th>No. KPS</th>
                    <th>Nama Ayah</th>
                    <th>Berkebutuhan Khusus Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pendidikan Ayah</th>
                    <th>Penghasilan Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Berkebutuhan Khusus Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Pendidikan Ibu</th>
                    <th>Penghasilan Ibu</th>
                    <th>Nama Wali</th>
                    <th>Berkebutuhan Khusus Wali</th>
                    <th>Pekerjaan Wali</th>
                    <th>Pendidikan Wali</th>
                    <th>Penghasilan Wali</th>
                    <th>Nama Prestasi</th>
                    <th>Tingkat Prestasi</th>
                    <th>Jenis Prestasi</th>
                    <th>Tahun Prestasi</th>
                    <th>Penyelenggara Prestasi</th>
                    <th>Jenis Beasiswa</th>
                    <th>Sumber Beasiswa</th>
                    <th>Tahun Mulai Beasiswa</th>
                    <th>Tahun Selesai Beasiswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->NIK }}</td>
                    <td>{{ $item->tmp_lahir }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->Umur }}</td>
                    <td>{{ $item->berkebutuhan_khusus }}</td>
                    <td>{{ $item->Tinggi_badan }}</td>
                    <td>{{ $item->Berat_badan }}</td>
                    <td>{{ $item->jarak_tempuh }}</td>
                    <td>{{ $item->jumlah_saudara }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->transportasi }}</td>
                    <td>{{ $item->jenis_tinggal }}</td>
                    <td>{{ $item->no_telepon }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->penerima_KPS }}</td>
                    <td>{{ $item->No_KPS }}</td>
                    <td>{{ $item->nama_ayah }}</td>
                    <td>{{ $item->berkebutuhan_khusus1 }}</td>
                    <td>{{ $item->pekerjaan_ayah }}</td>
                    <td>{{ $item->pendidikan_terakhir }}</td>
                    <td>{{ $item->penghasilan_ayah }}</td>
                    <td>{{ $item->nama_ibu }}</td>
                    <td>{{ $item->berkebutuhan_khusus2 }}</td>
                    <td>{{ $item->pekerjaan_ibu }}</td>
                    <td>{{ $item->pendidikan_terakhir2 }}</td>
                    <td>{{ $item->penghasilan_ibu }}</td>
                    <td>{{ $item->nama_wali }}</td>
                    <td>{{ $item->berkebutuhan_khusus3 }}</td>
                    <td>{{ $item->pekerjaan_wali }}</td>
                    <td>{{ $item->pendidikan_terakhir3 }}</td>
                    <td>{{ $item->penghasilan_wali }}</td>
                    <td>{{ $item->nama_prestasi }}</td>
                    <td>{{ $item->Tingkat }}</td>
                    <td>{{ $item->jenis_prestasi }}</td>
                    <td>{{ $item->Tahun }}</td>
                    <td>{{ $item->penyelenggara }}</td>
                    <td>{{ $item->jenis_beasiswa }}</td>
                    <td>{{ $item->sumber }}</td>
                    <td>{{ $item->tahun_mulai }}</td>
                    <td>{{ $item->tahun_selesai }}</td>
                    <td>
                        <a href="{{ route('daftar.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('daftar.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
