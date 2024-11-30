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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('Id_cart')->unique();
            $table->integer('Id_produk');
            $table->integer('Qty');
            $table->integer('Id_customer');

            $table->foreign('Id_produk')->references('Id_produk')->on('produks');
            $table->foreign('Id_customer')->references('Id_customer')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
