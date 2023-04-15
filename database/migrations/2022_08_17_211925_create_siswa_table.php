<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('nrp');
            $table->string('nama_kegiatan');
            $table->string('semester');
            $table->string('jenis');
            $table->string('waktu');
            $table->string('tempat');
            $table->string('golongan');
            $table->string('instansi');
            $table->string('posisi');
            $table->string('penyelenggara');
            $table->string('status');
            // $table->string('poin');
            // $table->string('status');
            // $table->string('keterangan');
            // $table->string('nama');
            // $table->integer('no');
            // $table->text('alamat');
            // $table->unique(array('no'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
