<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToPendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftar', function (Blueprint $table) {
            $table->foreign('jalur_id')->references('id')->on('jalur_masuk')->onDelete('cascade');
            $table->foreign('prodi1_id')->references('id')->on('prodi')->onDelete('cascade');
            $table->foreign('prodi2_id')->references('id')->on('prodi')->onDelete('cascade');
            $table->foreign('thn_akd_id')->references('id')->on('tahun_akademik')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftar', function (Blueprint $table) {
            $table->dropForeign(['jalur_id']);
            $table->dropForeign(['prodi1_id']);
            $table->dropForeign(['prodi2_id']);
            $table->dropForeign(['thn_akd_id']);
        });
    }
}
