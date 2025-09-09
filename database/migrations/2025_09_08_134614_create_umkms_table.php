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
                Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('nama');
            $table->string('kategori')->nullable();
            $table->string('kota')->nullable();
            $table->string('telepon')->nullable();
            $table->string('gambar')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
