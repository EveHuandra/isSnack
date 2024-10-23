<?php

namespace Database\Seeders;

use App\Models\transaction;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class transactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $transaction = new transaction();
            $transaction->Id_transaction=111;
            $transaction->Id_produk=11111111;
            $transaction->Quantity=3;
            $transaction->No_resi="SN12819573920348";
            $transaction->Harga=45000;
            $transaction->Date = '2024-09-10';
            $transaction->save();

            $transaction = new transaction();
            $transaction->Id_transaction=112;
            $transaction->Id_produk=11111112;
            $transaction->Quantity=5;
            $transaction->No_resi="SN128018237990";
            $transaction->Harga=175000;
            $transaction->Date="2024-09-10";
            $transaction->save();

            $transaction = new transaction();
            $transaction->Id_transaction=113;
            $transaction->Id_produk=11111113;
            $transaction->Quantity=2;
            $transaction->No_resi="SN154876646312";
            $transaction->Harga=40000;
            $transaction->Date="2024-09-22";
            $transaction->save();

            $transaction = new transaction();
            $transaction->Id_transaction=114;
            $transaction->Id_produk=11111114;
            $transaction->Quantity=8;
            $transaction->No_resi="'SN1478523965";
            $transaction->Harga=280000;
            $transaction->Date="2024-09-25";
            $transaction->save();

            $transaction = new transaction();
            $transaction->Id_transaction=115;
            $transaction->Id_produk=11111115;
            $transaction->Quantity=7;
            $transaction->No_resi="'SN1452369874";
            $transaction->Harga=175000;
            $transaction->Date="2024-09-30";
            $transaction->save();
}
}
