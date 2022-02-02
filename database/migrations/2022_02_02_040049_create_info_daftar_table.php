<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoDaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_daftar', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('masa_pendaftaran');
            $table->date('terakhir_pembayaran');
            $table->string('bank');
            $table->string('rekening');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_daftar');
    }
}
