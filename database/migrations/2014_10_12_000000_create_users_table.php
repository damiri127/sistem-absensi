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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('image')->nullable();
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->enum('level',['Admin','Guru','Kepala Sekolah','Tata Usaha']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_Active');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
