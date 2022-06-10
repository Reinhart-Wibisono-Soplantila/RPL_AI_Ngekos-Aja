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
        Schema::create('konfirmasi_pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('UserId');
            $table->string('Id_kos');
            $table->string('Id_pemesanan');
            $table->string('Konfirmasi_pencarian_pencari');
            $table->string('Konfirmasi_pencarian_pemilik');
            $table->string('Konfirmasi_pembayaran_pencari');
            $table->string('Konfirmasi_pembayaran_pemilik');
            $table->dateTime('Jam_konfimasi_mulai')->nullable();
            $table->dateTime('Jam_konfimasi_selesai')->nullable();
            $table->dateTime('Jam_pembayaran_mulai')->nullable();
            $table->dateTime('Jam_pembayaran_selesai')->nullable();
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
        Schema::dropIfExists('konfirmasi_pemesanans');
    }
};
