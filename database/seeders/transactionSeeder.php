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
            $transaction->Transaction_number=111111111;
            $transaction->Total_berat=100;
            $transaction->Phone="0813456789";
            $transaction->No_resi="SN12819573920348";
            $transaction->Kurir="Cindy";
            $transaction->Kota="Medan";
            $transaction->Ongkir=8000;
            $transaction->Total=50000;
            $transaction->Status="Dikirim ke kota tujuan";
            $transaction->Date=Carbon::now();
            $transaction->Address="Jalan Sapi Kuning";
            $transaction->save();

            $transaction = new transaction();
            $transaction->Id_transaction=112;
            $transaction->Transaction_number=111111112;
            $transaction->Total_berat=150;
            $transaction->Phone="081234568";
            $transaction->No_resi="SN128018237990";
            $transaction->Kurir="Adudu";
            $transaction->Kota="Jakarta";
            $transaction->Ongkir=12000;
            $transaction->Total=55000;
            $transaction->Status="Sedang dalam Pengemasan";
            $transaction->Date=Carbon::now();
            $transaction->Address="Jalan Sumatera";
            $transaction->save();
}
}
