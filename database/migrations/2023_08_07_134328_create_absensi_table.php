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
        Schema::create('absensi', function (Blueprint $table) {
            $table->id('id_absensi');
            $table->dateTimeTz('waktu_absensi');
            $table->foreignId('id_jadwal')->references('id_jadwal')->on('jadwal');
            $table->foreignId('id_penggajian')->references('id_penggajian')->on('penggajian');
            $table->bigInteger('pendapatan'); // Pendapatan didapat dari total jam pertemuan (ada pada table jadwal) dikalikan dengan harga untuk setiap satu jam pertemuan yang ada pada 
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
        Schema::dropIfExists('absensi');
    }
};
