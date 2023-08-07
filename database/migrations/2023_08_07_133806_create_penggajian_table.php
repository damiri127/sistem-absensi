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
        Schema::create('penggajian', function (Blueprint $table) {
            $table->id('id_penggajian');
            $table->enum('keterangan',['H', 'TH', 'I']); // H = Hadir | TH = Tidak Hadir | I = Izin 
            $table->integer('total_gaji'); // Total gaji akan diinputkan untuk setiap satu jam pertemuan (40 menit)
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
        Schema::dropIfExists('penggajian');
    }
};
