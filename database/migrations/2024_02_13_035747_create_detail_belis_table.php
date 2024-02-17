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
        Schema::create('detail_belis', function (Blueprint $table) {
            $table->id();
            $table->integer('harga_beli');
            $table->integer('jumlah_beli');
            $table->unsignedBigInteger('pembelian_id');
            $table->unsignedBigInteger('produk_id');
            $table->foreign('pembelian_id')->references('id')->on('pembelians')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('produk_id')->references('id')->on('produks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_belis');
    }
};
