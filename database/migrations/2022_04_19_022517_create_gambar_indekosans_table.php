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
        Schema::create('gambar_indekosans', function (Blueprint $table) {
            $table->id();
            $table->string('UserId');
            $table->string('Id_kos');
            $table->string('Foto_tampak_depan');
            $table->string('Foto_tampak_dalam');
            $table->string('Foto_dari_jalan');
            $table->string('Foto_depan_kamar');
            $table->string('Foto_dalam_kamar');
            $table->string('Foto_kamar_mandi');
            $table->string('Foto_lainnya')->nullable();
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
        Schema::dropIfExists('gambar_indekosans');
    }
};
