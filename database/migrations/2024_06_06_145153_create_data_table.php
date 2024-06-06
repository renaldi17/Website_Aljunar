<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('thn_ajar');
            $table->string('nama');
            $table->string('NIK');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->integer('Umur');
            $table->string('berkebutuhan_khusus');
            $table->integer('Tinggi_badan');
            $table->integer('Berat_badan');
            $table->string('jarak_tempuh');
            $table->integer('jumlah_saudara');
            $table->text('alamat');
            $table->string('transportasi');
            $table->string('jenis_tinggal');
            $table->string('no_telepon');
            $table->string('email');
            $table->boolean('penerima_KPS');
            $table->string('No_KPS')->nullable();
            $table->string('nama_ayah');
            $table->string('berkebutuhan_khusus1')->nullable();
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_terakhir');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('berkebutuhan_khusus2')->nullable();
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_terakhir2');
            $table->string('penghasilan_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('berkebutuhan_khusus3')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('pendidikan_terakhir3')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->string('nama_prestasi')->nullable();
            $table->string('Tingkat')->nullable();
            $table->string('jenis_prestasi')->nullable();
            $table->year('Tahun')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->string('jenis_beasiswa')->nullable();
            $table->string('sumber')->nullable();
            $table->year('tahun_mulai')->nullable();
            $table->year('tahun_selesai')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
