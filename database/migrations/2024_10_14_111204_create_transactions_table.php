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
        Schema::create('transactions', function (Blueprint $table) {
            $table->integer("Id_transaction")->autoIncrement();
            $table->integer("Id_produk");
            $table->integer("Quantity");
            $table->text("No_resi");
            $table->integer("Harga");
            $table->dateTime("Date");
            $table->timestamps();

            $table->foreign('Id_produk')->references('Id_produk')->on('produks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
