<?php

namespace Database\Seeders;

use App\Models\cart;
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
        $cart = new cart;
        $cart->Id_cart=1111;
        $cart->Qty=1;
        $cart->Id_produk=11111111;
        $cart->Id_user=101;
        $cart->save();

        $cart = new cart;
        $cart->Id_cart=1112;
        $cart->Qty=3;
        $cart->Id_produk=11111112;
        $cart->Id_user=102;
        $cart->save();
    }
}
