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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('UserId');
            $table->string('Id_kos');
            $table->string('Id_pemesanan');
            $table->string('Nama');
            $table->string('Nama_kos');
            $table->string('Jenis_kelamin_kamar');
            $table->string('Email');
            $table->string('Jenis_kelamin');
            $table->string('Nomor_telepon');
            $table->string('Masa_pembayaran_kos');
            $table->string('Tanggal_menetap');
            $table->string('Jumlah_lama_menetap');
            $table->string('Satuan_lama_menetap');
            $table->string('Total_harga');
            $table->string('Harga_sewa');
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
        Schema::dropIfExists('pemesanans');
    }
};
