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
        Schema::create('aturan_fasilitas_indekosans', function (Blueprint $table) {
            $table->id();
            $table->string('UserId');
            $table->string('Id_kos');
            $table->longText('Peraturan');
            $table->longText('Peraturan_lain')->nullable();
            $table->longText('Fasilitas_umum');
            $table->longText('Fasilitas_kamar');
            $table->longText('Fasilitas_kamar_mandi');
            $table->string('Tanggal_dibangun');
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
        Schema::dropIfExists('aturan_fasilitas_indekosans');
    }
};
