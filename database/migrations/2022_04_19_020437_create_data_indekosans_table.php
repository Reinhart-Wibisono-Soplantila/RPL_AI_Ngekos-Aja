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
        Schema::create('data_indekosans', function (Blueprint $table) {
            $table->id();
            $table->string('UserId');
            $table->string('Id_kos');
            $table->string('Nama_indekos');
            $table->longText('Deskripsi_indekos');
            $table->string('Tipe_kamar');
            $table->string('Gender_kamar');
            $table->string('Alamat');
            $table->longText('address_link');
            $table->string('Kabupaten_kota');
            $table->string('Kecamatan');
            $table->string('Panjang_kamar');
            $table->string('Lebar_kamar');
            $table->integer('Jumlah_seluruh_kamar');
            $table->integer('Jumlah_ketersediaan_kamar');
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
        Schema::dropIfExists('data_indekosans');
    }
};
