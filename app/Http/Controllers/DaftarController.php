<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DaftarController extends Controller
{
    public function publicIndex()
    {
        return view('daftar.publicIndex');
    }

    public function store(Request $request)
    {
        $data = new Data();
        $data->thn_ajar = $request->thn_ajar;
        $data->nama = $request->nama;
        $data->NIK = $request->NIK;
        $data->tmp_lahir = $request->tmp_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->agama = $request->agama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->Umur = $request->Umur;
        $data->berkebutuhan_khusus = $request->berkebutuhan_khusus;
        $data->Tinggi_badan = $request->Tinggi_badan;
        $data->Berat_badan = $request->Berat_badan;
        $data->jarak_tempuh = $request->jarak_tempuh;
        $data->jumlah_saudara = $request->jumlah_saudara;
        $data->alamat = $request->alamat;
        $data->transportasi = $request->transportasi;
        $data->jenis_tinggal = $request->jenis_tinggal;
        $data->no_telepon = $request->no_telepon;
        $data->email = $request->email;
        $data->penerima_KPS = $request->penerima_KPS;
        $data->No_KPS = $request->No_KPS;
        $data->nama_ayah = $request->nama_ayah;
        $data->berkebutuhan_khusus1 = $request->berkebutuhan_khusus1;
        $data->pekerjaan_ayah = $request->pekerjaan_ayah;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->penghasilan_ayah = $request->penghasilan_ayah;
        $data->nama_ibu = $request->nama_ibu;
        $data->berkebutuhan_khusus2 = $request->berkebutuhan_khusus2;
        $data->pekerjaan_ibu = $request->pekerjaan_ibu;
        $data->pendidikan_terakhir2 = $request->pendidikan_terakhir2;
        $data->penghasilan_ibu = $request->penghasilan_ibu;
        $data->nama_wali = $request->nama_wali;
        $data->berkebutuhan_khusus3 = $request->berkebutuhan_khusus3;
        $data->pekerjaan_wali = $request->pekerjaan_wali;
        $data->pendidikan_terakhir3 = $request->pendidikan_terakhir3;
        $data->penghasilan_wali = $request->penghasilan_wali;
        $data->nama_prestasi = $request->nama_prestasi;
        $data->Tingkat = $request->Tingkat;
        $data->jenis_prestasi = $request->jenis_prestasi;
        $data->Tahun = $request->Tahun;
        $data->penyelenggara = $request->penyelenggara;
        $data->jenis_beasiswa = $request->jenis_beasiswa;
        $data->sumber = $request->sumber;
        $data->tahun_mulai = $request->tahun_mulai;
        $data->tahun_selesai = $request->tahun_selesai;

        $data->save();

        return redirect()->route('daftar.index');
    }

    public function index()
    {
        $data = Data::all();
        return view('daftar.index', compact('data'));
    }

    public function edit($id)
    {
        $data = Data::findOrFail($id);
        return view('daftar.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Data::findOrFail($id);
        $data->thn_ajar = $request->thn_ajar;
        $data->nama = $request->nama;
        $data->NIK = $request->NIK;
        $data->tmp_lahir = $request->tmp_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->agama = $request->agama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->Umur = $request->Umur;
        $data->berkebutuhan_khusus = $request->berkebutuhan_khusus;
        $data->Tinggi_badan = $request->Tinggi_badan;
        $data->Berat_badan = $request->Berat_badan;
        $data->jarak_tempuh = $request->jarak_tempuh;
        $data->jumlah_saudara = $request->jumlah_saudara;
        $data->alamat = $request->alamat;
        $data->transportasi = $request->transportasi;
        $data->jenis_tinggal = $request->jenis_tinggal;
        $data->no_telepon = $request->no_telepon;
        $data->email = $request->email;
        $data->penerima_KPS = $request->penerima_KPS;
        $data->No_KPS = $request->No_KPS;
        $data->nama_ayah = $request->nama_ayah;
        $data->berkebutuhan_khusus1 = $request->berkebutuhan_khusus1;
        $data->pekerjaan_ayah = $request->pekerjaan_ayah;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->penghasilan_ayah = $request->penghasilan_ayah;
        $data->nama_ibu = $request->nama_ibu;
        $data->berkebutuhan_khusus2 = $request->berkebutuhan_khusus2;
        $data->pekerjaan_ibu = $request->pekerjaan_ibu;
        $data->pendidikan_terakhir2 = $request->pendidikan_terakhir2;
        $data->penghasilan_ibu = $request->penghasilan_ibu;
        $data->nama_wali = $request->nama_wali;
        $data->berkebutuhan_khusus3 = $request->berkebutuhan_khusus3;
        $data->pekerjaan_wali = $request->pekerjaan_wali;
        $data->pendidikan_terakhir3 = $request->pendidikan_terakhir3;
        $data->penghasilan_wali = $request->penghasilan_wali;
        $data->nama_prestasi = $request->nama_prestasi;
        $data->Tingkat = $request->Tingkat;
        $data->jenis_prestasi = $request->jenis_prestasi;
        $data->Tahun = $request->Tahun;
        $data->penyelenggara = $request->penyelenggara;
        $data->jenis_beasiswa = $request->jenis_beasiswa;
        $data->sumber = $request->sumber;
        $data->tahun_mulai = $request->tahun_mulai;
        $data->tahun_selesai = $request->tahun_selesai;

        $data->save();

        return redirect()->route('daftar.index');
    }

    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        $data->delete();
        return redirect()->route('daftar.index');
    }
}
