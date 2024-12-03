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
            $table->id();
            $table->integer("Id_transaction")->unique();
            $table->integer("Id_produk");
            $table->integer("Quantity");
            $table->text("No_resi");
            $table->integer("Harga");
            $table->dateTime("Date");
            $table->integer('Id_customer');
            $table->timestamps();

            $table->foreign('Id_produk')->references('Id_produk')->on('produks');
            $table->foreign('Id_customer')->references('Id_customer')->on('customers');
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
