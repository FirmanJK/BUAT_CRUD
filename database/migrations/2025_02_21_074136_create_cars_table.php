<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel cars.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); // Primary key (bigint, auto-increment)
            $table->string('brand'); // Kolom brand (VARCHAR)
            $table->string('model'); // Kolom model (VARCHAR)
            $table->integer('year'); // Kolom tahun pembuatan (INTEGER)
            $table->integer('price'); // Kolom harga mobil (INTEGER)
            $table->integer('stock'); // Kolom stok mobil (INTEGER)
            $table->text('description')->nullable(); // Kolom deskripsi (TEXT, bisa NULL)
            $table->timestamps(); // Kolom created_at & updated_at otomatis
        });
    }

    /**
     * Reverse migration, untuk menghapus tabel cars jika diperlukan rollback.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars'); // Menghapus tabel cars
    }
};