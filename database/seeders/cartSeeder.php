<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('carts')->insert([
        [
            'Id_cart' => 1111,
            'Id_produk'=> '11111111',
            'Qty'=>'1',
        ],

        [
            'Id_cart' => 1112,
            'Id_produk'=> '11111112',
            'Qty'=>'3',
        ],

        [
            'Id_cart' => 1113,
            'Id_produk'=> '11111113',
            'Qty'=>'5',
        ],

        [
            'Id_cart' => 1114,
            'Id_produk'=> '11111114',
            'Qty'=>'3',
        ],

        [
            'Id_cart' => 1115,
            'Id_produk'=> '11111115',
            'Qty'=>'4',
        ],
    ]);
}
}
