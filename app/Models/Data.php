<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'NIK', 'tmp_lahir', 'tgl_lahir', 'agama', 'jenis_kelamin', 'umur', 'berkebutuhan_khusus',
        'tinggi_badan', 'berat_badan', 'jarak_tempuh', 'jumlah_saudara', 'alamat', 'transportasi',
        'jenis_tinggal', 'no_telepon', 'email', 'penerima_KPS', 'No_KPS', 'nama_ayah', 'berkebutuhan_khusus1',
        'pekerjaan_ayah', 'pendidikan_terakhir_ayah', 'penghasilan_ayah', 'nama_ibu', 'berkebutuhan_khusus2',
        'pekerjaan_ibu', 'pendidikan_terakhir_ibu', 'penghasilan_ibu', 'nama_wali', 'berkebutuhan_khusus3',
        'pekerjaan_wali', 'pendidikan_terakhir_wali', 'penghasilan_wali', 'nama_prestasi', 'tingkat_prestasi',
        'jenis_prestasi', 'tahun_prestasi', 'penyelenggara', 'jenis_beasiswa', 'sumber_beasiswa', 'tahun_mulai_beasiswa',
        'tahun_selesai_beasiswa',
    ];
}
