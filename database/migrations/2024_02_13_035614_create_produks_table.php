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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk');
            $table->string('nama_produk');
            $table->tinyText('gambar_produk');
            $table->integer('harga');
            $table->integer('stok');
            $table->date('tanggal_kadaluarsa');
            $table->unsignedBigInteger('kategori_produk_id');
            $table->unsignedBigInteger('diskon_produk_id');
            $table->foreign('kategori_produk_id')->references('id')->on('kategori_produks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('diskon_produk_id')->references('id')->on('diskon_produks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
