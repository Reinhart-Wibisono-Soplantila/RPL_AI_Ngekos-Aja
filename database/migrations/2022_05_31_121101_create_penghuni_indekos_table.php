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
        Schema::create('penghuni_indekos', function (Blueprint $table) {
            $table->id();
            $table->string('Penghuni_Id');
            $table->string('Nama_penghuni');
            $table->string('Email_penghuni');
            $table->string('No_telepon_penghuni');
            $table->string('Id_kos');
            $table->string('Nama_indekos');
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
        Schema::dropIfExists('penghuni_indekos');
    }
};
