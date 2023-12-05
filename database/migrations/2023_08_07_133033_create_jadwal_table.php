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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->enum('hari',['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->integer('total_jp'); // jp = jam pertemuan 40 menit = 1 jam pertemuan
            $table->foreignId('id_mapel')->references('id_mapel')->on('matapelajaran');
            $table->foreignId('id_kelas')->references('id_kelas')->on('kelas');
            $table->foreignId('id_guru')->references('id')->on('users'); //ID Guru didapat pada table users. //
            $table->foreignId('id_tahun_ajaran')->references('id_tahun_ajaran')->on('tahun_ajaran');
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
        Schema::dropIfExists('jadwal');
    }
};
