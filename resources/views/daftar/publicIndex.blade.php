@extends('layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/daftar.css')}}">
    <!-- Current Page -->
    <section id="hero" class="px-0">
        <div class="container">
            <div class="hero-title">
                <div class="hero-text">Daftar</div>
            </div>
        </div>
    </section>

    <!-- Formulir -->
    <section class="box-formulir">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <h2>Formulir Pendaftaran Siswa Baru</h2>
        
        <form action="{{ route('daftar.store') }}" method="post">
            <div class="box">
                <table class="table_form">
                    <tr>
                        <td>Tahun Ajaran</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="thn_ajar" class= "input-control" value="2023/2024" readonly>
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
                        <td>
                            <input type="text" name="nama" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>NIK</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="NIK" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td> 
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class= "btn-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td> 
                        <td>:</td>
                        <td>
                            <select name="agama" class= "btn-control">
                            <option value="">---Pilih---</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td> 
                        <td>:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" class= "btn-control" value="Laki-Laki"> Laki-Laki
                            <input type="radio" name="jenis_kelamin" class= "btn-control" value="Perempuan"> Perempuan
                        </td>
                    </tr>               
                    <tr>
                        <td>Umur</td> 
                        <td>:</td>
                        <td>
                            <select name="Umur" class= "btn-control">
                            <option value="">---Pilih---</option>
                                <option value="12">12</option>
                                <option value="11">11</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Berkebutuhan Khusus</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="berkebutuhan_khusus" class= "input-control" >
                        </td>
                    </tr>
                        <tr>
                        <td>Tinggi Badan</td>
                        <td>:</td><td>
                            <input type="text" name="Tinggi_badan" class= "input-control" <td>cm</td> >
                        </td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td><td>:</td><td>
                            <input type="text" name="Berat_badan" class= "input-control" <td>Kg</td>> 
                        </td>
                    </tr>
                    <tr>
                        <td>Jarak Ke sekolah</td> 
                        <td>:</td>
                        <td>
                            <select name="jarak_tempuh" class= "btn-control">
                            <option value="">---Pilih---</option>
                                <option value="Kurang dari 1 km">Kurang dari 1 km</option>
                                <option value="Lebih dari 1 km">Lebih dari 1 km</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Saudara Kandung</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="jumlah_saudara" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td> 
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Alat Transportasi ke sekolah</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="transportasi" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Tempat Tingal</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="jenis_tinggal" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>No Telephone</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="no_telepon" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Apakah Sebagai Penerima KPS</td> 
                        <td>:</td>
                        <td>
                            <select name="penerima_KPS" id="penerima_KPS" class="btn-control" onchange="showKPS()">
                                <option value="">---Pilih---</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </td>
                    </tr>
                    <tr id="No_KPS_row" style="display:none;">
                        <td>Nomor KPS</td>
                        <td>:</td>
                        <td><input type="text" name="No_KPS" id="No_KPS"></td>
                        </tr>

            <script>
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
                    <<tr>
                        <td>Nama Ayah</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="nama_ayah" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Berkebutuhan Khusus</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="berkebutuhan_khusus1" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="pekerjaan_ayah" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir Ayah</td> 
                        <td>:</td>
                        <td>
                            <select name="pendidikan_terakhir" class= "btn-control">
                            <option value="">---Pilih---</option>
                                <option value="Tidak sekolah">Tidak sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD sederajat">SD sederajat</option>
                                <option value="SMP sederajat">SMP sederajat</option>
                                <option value="SMA sederajat">SMA sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ayah</td> 
                        <td>:</td>
                        <td>
                            <select name="penghasilan_ayah" class= "btn-control">
                            <option value="">---Pilih---</option>
                                <option value="Kurang dari 1.000.000">Kurang dari 1.000.000</option>
                                <option value="Rp 1.000.000 - 2.000.000">Rp 1.000.000 - 2.000.000</option>
                                <option value="Lebih dari Rp 2.000.000">Lebih dari Rp 2.000.000</option>
                            </select>
                        </td>
                    </tr>
                </table>   
            </div>
            <h3>Data Ibu Kandung</h3>
            <div class="box">
                <table class="table_form">
                    <<tr>
                        <td>Nama Ibu</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="nama_ibu" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Berkebutuhan Khusus</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="berkebutuhan_khusus2" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="pekerjaan_ibu" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir Ibu</td> 
                        <td>:</td>
                        <td>
                            <select name="pendidikan_terakhir2" class= "btn-control">
                            <option value="">---Pilih---</option>
                                <option value="Tidak sekolah">Tidak sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD sederajat">SD sederajat</option>
                                <option value="SMP sederajat">SMP sederajat</option>
                                <option value="SMA sederajat">SMA sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ibu</td> 
                        <td>:</td>
                        <td>
                            <select name="penghasilan_ibu" class= "btn-control">
                            <option value="">---Pilih---</option>
                                <option value="Kurang dari 1.000.000">Kurang dari 1.000.000</option>
                                <option value="Rp 1.000.000 - 2.000.000">Rp 1.000.000 - 2.000.000</option>
                                <option value="Lebih dari Rp 2.000.000">Lebih dari Rp 2.000.000</option>
                            </select>
                        </td>
                    </tr>
                </table>   
            </div>

            <h3>Data Wali</h3>
            <div class="box">
                <table class="table_form">
                    <<tr>
                        <td>Nama Wali</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="nama_wali" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Berkebutuhan Khusus</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="berkebutuhan_khusus3" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Wali</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="pekerjaan_wali" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir Wali</td> 
                        <td>:</td>
                        <td>
                            <select name="pendidikan_terakhir3" class= "btn-control">
                            <option value="">---Pilih---</option>
                                <option value="Tidak sekolah">Tidak sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD sederajat">SD sederajat</option>
                                <option value="SMP sederajat">SMP sederajat</option>
                                <option value="SMA sederajat">SMA sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan Wali</td> 
                        <td>:</td>
                        <td>
                            <select name="penghasilan_wali" class= "btn-control">
                            <option value="">---Pilih---</option>
                                <option value="Kurang dari 1.000.000">Kurang dari 1.000.000</option>
                                <option value="Rp 1.000.000 - 2.000.000">Rp 1.000.000 - 2.000.000</option>
                                <option value="Lebih dari Rp 2.000.000">Lebih dari Rp 2.000.000</option>
                            </select>
                        </td>
                    </tr>
                </table>   
            </div>

            <h3>Catatan Prestasi</h3>
            <div class="box">
                <table class="table_form">
                    <<tr>
                        <td>Nama Prestasi</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="nama_prestasi" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Tingkat</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="Tingkat" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Prestasi</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="jenis_prestasi" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="Tahun" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Penyelenggara</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="penyelenggara" class= "input-control" >
                        </td>
                    </tr>
                </table>   
            </div>

            <h3>Catatan Prestasi</h3>
            <div class="box">
                <table class="table_form">
                    <<tr>
                        <td>Jenis Beasiswa</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="jenis_beasiswa" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Sumber beasiswa</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="sumber" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Mulai</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="tahun_mulai" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Selesai</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="tahun_selesai" class= "input-control" >
                        </td>
                    </tr>

                <div>
                    <tr>
                        <td></td> 
                        <td></td>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value= "Daftar">
                        </td>
                    </tr>
                </div>
            </table>
        </form>
    </section>
@endsection