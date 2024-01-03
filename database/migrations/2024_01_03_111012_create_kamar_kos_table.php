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
    Schema::create('kamar_kos', function (Blueprint $table) {
        $table->id('id_nama');
        $table->string('nama', 100)->unique();
        $table->string('lokasi', 100);
        $table->integer('harga');
        $table->string('kamar_mandi', 100);
        $table->string('gender', 100);
        $table->integer('stok');
        $table->string('deskripsi_singkat', 200);
        $table->text('deskripsi_lengkap');
        $table->string('gambar_utama', 200);
        $table->string('gambar_satu', 200);
        $table->string('gambar_dua', 200);
        $table->string('gambar_tiga', 200)->nullable();
        $table->string('gambar_empat', 200)->nullable();
        $table->string('gambar_lima', 200)->nullable();
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
        Schema::dropIfExists('kamar_kos');
    }
};
