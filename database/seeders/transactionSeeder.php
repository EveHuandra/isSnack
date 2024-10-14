<?php

namespace Database\Seeders;

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
        DB::table('transactions')->insert([
        [
            'Id_transaction' => '111',
            'Transaction_number'=> '111111111',
            'Total_berat'=>'100',
            'Phone'=>'0813456789',
            'No_resi'=>'SN12819573920348',
            'Kurir'=>'Cindy',
            'Kota'=>'Medan',
            'Ongkir'=>'8000',
            'Total'=>'50000',
            'Status'=>'Dikirim ke kota tujuan',
            'Date'=>'2024-10-1',
            'Address'=>'Jalan Sapi Kuning',
        ],

        [
            'Id_transaction' => '112',
            'Transaction_number'=> '111111112',
            'Total_berat'=>'150',
            'Phone'=>'081234568',
            'No_resi'=>'SN128018237990',
            'Kurir'=>'Adudu',
            'Kota'=>'Jakarta',
            'Ongkir'=>'12000',
            'Total'=>'55000',
            'Status'=>'Sedang dalam Pengemasan',
            'Date'=>'2024-10-5',
            'Address'=>'Jalan Sumatera',
        ],

        [
            'Id_transaction' => '113',
            'Transaction_number'=> '111111113',
            'Total_berat'=>'80',
            'Phone'=>'08145463515',
            'No_resi'=>'SN154876646312',
            'Kurir'=>'Tok Dalang',
            'Kota'=>'Durian Runtuh',
            'Ongkir'=>'10000',
            'Total'=>'45000',
            'Status'=>'Diantar ke kota tujuan',
            'Date'=>'2024-10-10',
            'Address'=>'Jalan Kampung Runtuh no 12',
        ],

        [
            'Id_transaction' => '114',
            'Transaction_number'=> '111111114',
            'Total_berat'=>'150',
            'Phone'=>'0866547556',
            'No_resi'=>'SN1478523965',
            'Kurir'=>'Boboiboy',
            'Kota'=>'Pulau Rintis',
            'Ongkir'=>'15000',
            'Total'=>'55000',
            'Status'=>'Diproses di Pulau Rintis DC',
            'Date'=>'2024-10-4',
            'Address'=>'Jalan Rintis no 3',
        ],

        [
            'Id_transaction' => '115',
            'Transaction_number'=> '111111115',
            'Total_berat'=>'40',
            'Phone'=>'08132654789',
            'No_resi'=>'SN1452369874',
            'Kurir'=>'Kirby',
            'Kota'=>'Kampung Sugar',
            'Ongkir'=>'8000',
            'Total'=>'50000',
            'Status'=>'Diantar ke kota tujuan',
            'Date'=>'2024-10-5',
            'Address'=>'Jl Gula-gula no 10',
        ],
    ]);
}
}
