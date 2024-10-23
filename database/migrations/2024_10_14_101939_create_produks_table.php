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
            $table->integer("Id_produk")->autoIncrement();
            $table->text("Kategori");
            $table->text("Isi");
            $table->integer("Ukuran");
            $table->text("Nama");
            $table->text("Deskripsi");
            $table->dateTime("Expired");
            $table->integer("Berat");
            $table->integer("Stock");
            $table->integer("Harga");
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
