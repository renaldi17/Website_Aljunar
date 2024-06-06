@extends('layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/aduan.css')}}">
    <!-- Current Page -->
    <section id="hero" class="px-0">
        <div class="container">
            <div class="hero-title">
                <div class="hero-text">Aduan</div>
            </div>
        </div>
    </section>

    <!-- Formulir -->
    <section class="box-formulir">
    
        <form action="" method="post">
            <h3>Data Diri</h3>
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
                        <td>Kelas Siswa</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="kelas" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Orang Tua</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="nama_ortu" class= "input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone</td> 
                        <td>:</td>
                        <td>
                            <input type="text" name="no_telp" class= "input-control" >
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Aduan</td> 
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="aduan"></textarea>
                        </td>
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
            

                <div>
                    <tr>
                        <td></td> 
                        <td></td>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value= "Submit" >
                        </td>
                    </tr>
                </table>
                
            </div>

        </form>
    </section>
@endsection
    