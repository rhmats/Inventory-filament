<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manajemen_data_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->integer('kode_barang');
            $table->string('kategori_barang');
            $table->integer('harga_barang');
            $table->integer('jumlah_barang');
            $table->string('deskripsi_barang');
            $table->string('lokasi_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manajemen_data_barangs');
    }
};