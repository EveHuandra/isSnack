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
            $table->integer("Id_cart")->autoIncrement();
            $table->integer("Id_produk");
            $table->integer("Qty");

            $table->foreign('Id_produk')->references('Id_produk')->on('produks');
            $table->foreign('Id_user')->references('Id_user')->on('customers');
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
