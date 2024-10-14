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
            $table->integer("Id_transaction");
            $table->integer("Transaction_number");
            $table->integer("Total_berat");
            $table->text("Phone");
            $table->text("No_resi");
            $table->text("Kurir");
            $table->text("Kota");
            $table->integer("Ongkir");
            $table->integer("Total");
            $table->text("Status");
            $table->dateTime("Date");
            $table->text("Address");
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
