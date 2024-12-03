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
            DB::table('transactions')->insert([
                [
                'Id_transaction' => 111,
                'Id_produk' => 11111111,
                'Quantity' => 3,
                'No_resi' => "SN12819573920348",
                'Harga' => 4500,
                'Date' => '2024-09-10',
                ],
                [
                    'Id_transaction' => 112,
                    'Id_produk' => 11111112,
                    'Quantity' => 5,
                    'No_resi' => "SN128018237990",
                    'Harga' => 175000,
                    'Date' => '2024-09-10',
                ],
                [
                    'Id_transaction' => 113,
                    'Id_produk' => 11111113,
                    'Quantity' => 2,
                    'No_resi' => "SN154876646312",
                    'Harga' => 40000,
                    'Date' => '2024-09-22',
                ],
                [
                    'Id_transaction' => 114,
                    'Id_produk' => 11111114,
                    'Quantity' => 8,
                    'No_resi' => "SN1478523965",
                    'Harga' => 280000,
                    'Date' => '2024-09-22',
                ],
                [
                    'Id_transaction' => 115,
                    'Id_produk' => 11111115,
                    'Quantity' => 7,
                    'No_resi' => "SN1452369874",
                    'Harga' => 175000,
                    'Date' => '2024-09-22',
                ]
            ]);
        }
    }