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
        Schema::create('diskon_produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_diskon');
            $table->enum('jenis_diskon', ['persentase', 'nominal']);
            $table->integer('nilai_diskon');
            $table->string('deskripsi');
            $table->text('berlaku_mulai');
            $table->text('berlaku_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskon_produks');
    }
};