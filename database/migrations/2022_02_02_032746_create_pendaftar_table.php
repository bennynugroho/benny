<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nama');
            $table->string('kelamin');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('nik');
            $table->string('kk');
            $table->string('kel');
            $table->string('kec');
            $table->string('kp');
            $table->string('tlp');
            $table->string('wa');
            $table->string('email');
            $table->string('foto');
            $table->string('slta');
            $table->string('thn_slta');
            $table->string('nisn');
            $table->string('npsn');
            $table->string('jur_slta');
            $table->string('prestasi_akd');
            $table->string('prestasi_non_akd');
            $table->string('ayah');
            $table->string('kerja_ayah');
            $table->string('ibu');
            $table->string('kerja_ibu');
            $table->string('jum_anak');
            $table->string('penghasilan_ortu');
            $table->string('tlp_ortu');
            $table->unsignedInteger('jalur_id');
            $table->unsignedInteger('prodi1_id');
            $table->unsignedInteger('prodi2_id');
            $table->string('sumber_info');
            $table->tinyInteger('status');
            $table->date('tgl_daftar');
            $table->unsignedInteger('thn_akd_id');
            $table->string('nama_rekomendasi');
            $table->string('tlp_rekomendasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
