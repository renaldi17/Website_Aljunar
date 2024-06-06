@extends('layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Edit</title>
<link rel="stylesheet" href="{{ asset('assets/css/daftar.css')}}">

<!-- Current Page -->
<section id="hero" class="px-0">
    <div class="container">
        <div class="hero-title">
            <div class="hero-text">Edit Data Siswa</div>
        </div>
    </div>
</section>

<!-- Formulir -->
<section class="box-formulir">
    <h2>Formulir Edit Data Siswa</h2>
    
    <form action="{{ url('/daftar/' . $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="box">
            <table class="table_form">
                <tr>
                    <td>Tahun Ajaran</td> 
                    <td>:</td>
                    <td>
                        <input type="text" name="thn_ajar" class="input-control" value="{{ $data->thn_ajar }}" readonly>
                    </td>
                </tr>
            </table>
        </div>

        <h3>Data Diri Calon Siswa</h3>
        <div class="box">
            <table class="table_form">
                <tr>
                    <td>Nama Lengkap</td> 
                    <td>:</td>
                    <td><input type="text" name="nama" class="input-control" value="{{ $data->nama }}" required></td>
                </tr>
                <tr>
                    <td>NIK</td> 
                    <td>:</td>
                    <td><input type="text" name="NIK" class="input-control" value="{{ $data->NIK }}" required></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td> 
                    <td>:</td>
                    <td><input type="text" name="tmp_lahir" class="input-control" value="{{ $data->tmp_lahir }}" required></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td> 
                    <td>:</td>
                    <td><input type="date" name="tgl_lahir" class="btn-control" value="{{ $data->tgl_lahir }}" required></td>
                </tr>
                <tr>
                    <td>Agama</td> 
                    <td>:</td>
                    <td>
                        <select name="agama" class="btn-control" required>
                            <option value="">---Pilih---</option>
                            <option value="Islam" {{ $data->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Protestan" {{ $data->agama == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                            <option value="Katholik" {{ $data->agama == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                            <option value="Budha" {{ $data->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                            <option value="Hindu" {{ $data->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Konghuchu" {{ $data->agama == 'Konghuchu' ? 'selected' : '' }}>Konghuchu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td> 
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" class="btn-control" value="Laki-Laki" {{ $data->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }} required> Laki-Laki
                        <input type="radio" name="jenis_kelamin" class="btn-control" value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} required> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Umur</td> 
                    <td>:</td>
                    <td>
                        <select name="Umur" class="btn-control" required>
                            <option value="">---Pilih---</option>
                            <option value="12" {{ $data->Umur == '12' ? 'selected' : '' }}>12</option>
                            <option value="11" {{ $data->Umur == '11' ? 'selected' : '' }}>11</option>
                            <option value="10" {{ $data->Umur == '10' ? 'selected' : '' }}>10</option>
                            <option value="9" {{ $data->Umur == '9' ? 'selected' : '' }}>9</option>
                            <option value="8" {{ $data->Umur == '8' ? 'selected' : '' }}>8</option>
                            <option value="7" {{ $data->Umur == '7' ? 'selected' : '' }}>7</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Berkebutuhan Khusus</td> 
                    <td>:</td>
                    <td><input type="text" name="berkebutuhan_khusus" class="input-control" value="{{ $data->berkebutuhan_khusus }}"></td>
                </tr>
                <tr>
                    <td>Tinggi Badan</td>
                    <td>:</td>
                    <td><input type="text" name="Tinggi_badan" class="input-control" value="{{ $data->Tinggi_badan }}"> cm</td>
                </tr>
                <tr>
                    <td>Berat Badan</td>
                    <td>:</td>
                    <td><input type="text" name="Berat_badan" class="input-control" value="{{ $data->Berat_badan }}"> Kg</td>
                </tr>
                <tr>
                    <td>Jarak Ke sekolah</td> 
                    <td>:</td>
                    <td>
                        <select name="jarak_tempuh" class="btn-control" required>
                            <option value="">---Pilih---</option>
                            <option value="Kurang dari 1 km" {{ $data->jarak_tempuh == 'Kurang dari 1 km' ? 'selected' : '' }}>Kurang dari 1 km</option>
                            <option value="Lebih dari 1 km" {{ $data->jarak_tempuh == 'Lebih dari 1 km' ? 'selected' : '' }}>Lebih dari 1 km</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Saudara Kandung</td> 
                    <td>:</td>
                    <td><input type="text" name="jumlah_saudara" class="input-control" value="{{ $data->jumlah_saudara }}" required></td>
                </tr>
                <tr>
                    <td>Alamat</td> 
                    <td>:</td>
                    <td><textarea class="input-control" name="alamat" required>{{ $data->alamat }}</textarea></td>
                </tr>
                <tr>
                    <td>Alat Transportasi ke sekolah</td> 
                    <td>:</td>
                    <td><input type="text" name="transportasi" class="input-control" value="{{ $data->transportasi }}" required></td>
                </tr>
                <tr>
                    <td>Jenis Tempat Tinggal</td> 
                    <td>:</td>
                    <td><input type="text" name="jenis_tinggal" class="input-control" value="{{ $data->jenis_tinggal }}" required></td>
                </tr>
                <tr>
                    <td>No Telepon</td> 
                    <td>:</td>
                    <td><input type="text" name="no_telepon" class="input-control" value="{{ $data->no_telepon }}" required></td>
                </tr>
                <tr>
                    <td>Email</td> 
                    <td>:</td>
                    <td><input type="email" name="email" class="input-control" value="{{ $data->email }}" required></td>
                </tr>
                <tr>
                    <td>Apakah Sebagai Penerima KPS</td> 
                    <td>:</td>
                    <td>
                        <select name="penerima_KPS" id="penerima_KPS" class="btn-control" onchange="showKPS()" required>
                            <option value="">---Pilih---</option>
                            <option value="Ya" {{ $data->penerima_KPS == 'Ya' ? 'selected' : '' }}>Ya</option>
                            <option value="Tidak" {{ $data->penerima_KPS == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </td>
                    </tr>
                    <tr id="No_KPS_row" style="{{ $data->penerima_KPS == 'Ya' ? '' : 'display:none;' }}">
                    <td>Nomor KPS</td>
                    <td>:</td>
                    <td><input type="text" name="No_KPS" id="No_KPS" value="{{ $data->No_KPS }}"></td>
                    </tr>
                        <script>
                        window.onload = function () {
                        showKPS();
                        };
                        function showKPS() {
                        var selectedOption = document.getElementById("penerima_KPS").value;
                        var nomorKPSRow = document.getElementById("No_KPS_row");
                        if (selectedOption === "Ya") {
                        nomorKPSRow.style.display = "table-row";
                    } else {
                        nomorKPSRow.style.display = "none";
                    }
                }
            </script>
        </table>
    </div>

    <h3>Data Ayah Kandung</h3>
    <div class="box">
        <table class="table_form">
            <tr>
                <td>Nama Ayah</td> 
                <td>:</td>
                <td><input type="text" name="nama_ayah" class="input-control" value="{{ $data->nama_ayah }}" required></td>
            </tr>
            <tr>
                <td>Berkebutuhan Khusus</td> 
                <td>:</td>
                <td><input type="text" name="berkebutuhan_khusus1" class="input-control" value="{{ $data->berkebutuhan_khusus1 }}"></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td> 
                <td>:</td>
                <td><input type="text" name="pekerjaan_ayah" class="input-control" value="{{ $data->pekerjaan_ayah }}" required></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ayah</td> 
                <td>:</td>
                <td>
                    <select name="pendidikan_terakhir" class="btn-control" required>
                        <option value="">---Pilih---</option>
                        <option value="Tidak sekolah" {{ $data->pendidikan_terakhir == 'Tidak sekolah' ? 'selected' : '' }}>Tidak sekolah</option>
                        <option value="Putus SD" {{ $data->pendidikan_terakhir == 'Putus SD' ? 'selected' : '' }}>Putus SD</option>
                        <option value="SD Sederajat" {{ $data->pendidikan_terakhir == 'SD Sederajat' ? 'selected' : '' }}>SD Sederajat</option>
                        <option value="SMP Sederajat" {{ $data->pendidikan_terakhir == 'SMP Sederajat' ? 'selected' : '' }}>SMP Sederajat</option>
                        <option value="SMA Sederajat" {{ $data->pendidikan_terakhir == 'SMA Sederajat' ? 'selected' : '' }}>SMA Sederajat</option>
                        <option value="D1" {{ $data->pendidikan_terakhir == 'D1' ? 'selected' : '' }}>D1</option>
                        <option value="D2" {{ $data->pendidikan_terakhir == 'D2' ? 'selected' : '' }}>D2</option>
                        <option value="D3" {{ $data->pendidikan_terakhir == 'D3' ? 'selected' : '' }}>D3</option>
                        <option value="D4/S1" {{ $data->pendidikan_terakhir == 'D4/S1' ? 'selected' : '' }}>D4/S1</option>
                        <option value="S2" {{ $data->pendidikan_terakhir == 'S2' ? 'selected' : '' }}>S2</option>
                        <option value="S3" {{ $data->pendidikan_terakhir == 'S3' ? 'selected' : '' }}>S3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Penghasilan Ayah</td> 
                <td>:</td>
                <td><input type="text" name="penghasilan_ayah" class="input-control" value="{{ $data->penghasilan_ayah }}" required></td>
            </tr>
        </table>
    </div>

    <h3>Data Ibu Kandung</h3>
    <div class="box">
        <table class="table_form">
            <tr>
                <td>Nama Ibu</td> 
                <td>:</td>
                <td><input type="text" name="nama_ibu" class="input-control" value="{{ $data->nama_ibu }}" required></td>
            </tr>
            <tr>
                <td>Berkebutuhan Khusus</td> 
                <td>:</td>
                <td><input type="text" name="berkebutuhan_khusus2" class="input-control" value="{{ $data->berkebutuhan_khusus2 }}"></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td> 
                <td>:</td>
                <td><input type="text" name="pekerjaan_ibu" class="input-control" value="{{ $data->pekerjaan_ibu }}" required></td>
                </tr>
                <tr>
                <td>Pendidikan Terakhir Ibu</td> 
                <td>:</td>
                <td>
                    <select name="pendidikan_terakhir_ibu" class="btn-control" required>
                        <option value="">---Pilih---</option>
                        <option value="Tidak sekolah" {{ $data->pendidikan_terakhir_ibu == 'Tidak sekolah' ? 'selected' : '' }}>Tidak sekolah</option>
                        <option value="Putus SD" {{ $data->pendidikan_terakhir_ibu == 'Putus SD' ? 'selected' : '' }}>Putus SD</option>
                        <option value="SD Sederajat" {{ $data->pendidikan_terakhir_ibu == 'SD Sederajat' ? 'selected' : '' }}>SD Sederajat</option>
                        <option value="SMP Sederajat" {{ $data->pendidikan_terakhir_ibu == 'SMP Sederajat' ? 'selected' : '' }}>SMP Sederajat</option>
                        <option value="SMA Sederajat" {{ $data->pendidikan_terakhir_ibu == 'SMA Sederajat' ? 'selected' : '' }}>SMA Sederajat</option>
                        <option value="D1" {{ $data->pendidikan_terakhir_ibu == 'D1' ? 'selected' : '' }}>D1</option>
                        <option value="D2" {{ $data->pendidikan_terakhir_ibu == 'D2' ? 'selected' : '' }}>D2</option>
                        <option value="D3" {{ $data->pendidikan_terakhir_ibu == 'D3' ? 'selected' : '' }}>D3</option>
                        <option value="D4/S1" {{ $data->pendidikan_terakhir_ibu == 'D4/S1' ? 'selected' : '' }}>D4/S1</option>
                        <option value="S2" {{ $data->pendidikan_terakhir_ibu == 'S2' ? 'selected' : '' }}>S2</option>
                        <option value="S3" {{ $data->pendidikan_terakhir_ibu == 'S3' ? 'selected' : '' }}>S3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Penghasilan Ibu</td> 
                <td>:</td>
                <td><input type="text" name="penghasilan_ibu" class="input-control" value="{{ $data->penghasilan_ibu }}" required></td>
            </tr>
        </table>
    </div>

    <h3>Data Wali</h3>
    <div class="box">
        <table class="table_form">
            <tr>
                <td>Nama Wali</td> 
                <td>:</td>
                <td><input type="text" name="nama_wali" class="input-control" value="{{ $data->nama_wali }}"></td>
            </tr>
            <tr>
                <td>Berkebutuhan Khusus</td> 
                <td>:</td>
                <td><input type="text" name="berkebutuhan_khusus3" class="input-control" value="{{ $data->berkebutuhan_khusus3 }}"></td>
            </tr>
            <tr>
                <td>Pekerjaan Wali</td> 
                <td>:</td>
                <td><input type="text" name="pekerjaan_wali" class="input-control" value="{{ $data->pekerjaan_wali }}"></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Wali</td> 
                <td>:</td>
                <td>
                    <select name="pendidikan_terakhir_wali" class="btn-control">
                        <option value="">---Pilih---</option>
                        <option value="Tidak sekolah" {{ $data->pendidikan_terakhir_wali == 'Tidak sekolah' ? 'selected' : '' }}>Tidak sekolah</option>
                        <option value="Putus SD" {{ $data->pendidikan_terakhir_wali == 'Putus SD' ? 'selected' : '' }}>Putus SD</option>
                        <option value="SD Sederajat" {{ $data->pendidikan_terakhir_wali == 'SD Sederajat' ? 'selected' : '' }}>SD Sederajat</option>
                        <option value="SMP Sederajat" {{ $data->pendidikan_terakhir_wali == 'SMP Sederajat' ? 'selected' : '' }}>SMP Sederajat</option>
                        <option value="SMA Sederajat" {{ $data->pendidikan_terakhir_wali == 'SMA Sederajat' ? 'selected' : '' }}>SMA Sederajat</option>
                        <option value="D1" {{ $data->pendidikan_terakhir_wali == 'D1' ? 'selected' : '' }}>D1</option>
                        <option value="D2" {{ $data->pendidikan_terakhir_wali == 'D2' ? 'selected' : '' }}>D2</option>
                        <option value="D3" {{ $data->pendidikan_terakhir_wali == 'D3' ? 'selected' : '' }}>D3</option>
                        <option value="D4/S1" {{ $data->pendidikan_terakhir_wali == 'D4/S1' ? 'selected' : '' }}>D4/S1</option>
                        <option value="S2" {{ $data->pendidikan_terakhir_wali == 'S2' ? 'selected' : '' }}>S2</option>
                        <option value="S3" {{ $data->pendidikan_terakhir_wali == 'S3' ? 'selected' : '' }}>S3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Penghasilan Wali</td> 
                <td>:</td>
                <td><input type="text" name="penghasilan_wali" class="input-control" value="{{ $data->penghasilan_wali }}"></td>
            </tr>
        </table>
    </div>
    <h3>Prestasi</h3>
    <div class="box">
        <table class="table_form">
            <tr>
                <td>Prestasi</td>
                <td>:</td>
                <td><input type="text" name="prestasi" class="input-control" value="{{ $data->prestasi }}"></td>
            </tr>
        </table>
    </div>

    <h3>Beasiswa</h3>
    <div class="box">
        <table class="table_form">
            <tr>
                <td>Beasiswa</td>
                <td>:</td>
                <td><input type="text" name="beasiswa" class="input-control" value="{{ $data->beasiswa }}"></td>
            </tr>
        </table>
    </div>

    <div class="box">
        <input type="submit" name="submit" class="btn-submit" value="Simpan">
    </div>
</form>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    showKPS();
});

function showKPS() {
    var penerimaKPS = document.getElementById("penerima_KPS").value;
    var kpsNumberRow = document.getElementById("kps_number_row");
    if (penerimaKPS === "Ya") {
        kpsNumberRow.style.display = "";
    } else {
        kpsNumberRow.style.display = "none";
        document.getElementById("no_KPS").value = "";
    }
}
</script>

@endsection

                
