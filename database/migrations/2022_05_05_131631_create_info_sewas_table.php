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
        Schema::create('info_sewas', function (Blueprint $table) {
            $table->id();
            $table->string('UserId');
            $table->string('Id_kos');
            $table->string('Jangka_waktu_sewa');
            $table->string('Uang_muka');
            $table->string('Harga_sewa_pertahun');
            $table->string('Harga_sewa_per6bulan');
            $table->string('Harga_sewa_per3bulan');
            $table->string('Harga_sewa_perbulan');
            // $table->string('Harga_sewa');
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
        Schema::dropIfExists('info_sewas');
    }
};
