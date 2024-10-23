<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = new produk;
        $produk->Id_produk=11111111;
        $produk->Kategori="ringan";
        $produk->Isi="Ingredients: Kentang, Minyak sayur, Garam, Perasa, Pengawet,Pewarna dan penguat";
        $produk->Ukuran=30;
        $produk->Nama="Potato Chups";
        $produk->Deskripsi="Keripik kentang yang tipis dan renyah ini digoreng dengan sempurna untuk menghasilkan tekstur yang gurih. Tersedia dalam berbagai varian rasa seperti original (asin), BBQ, keju, dan balado. Snack ini cocok untuk dinikmati kapan saja sebagai teman ngemil saat santai.";
        $produk->Expired="2025-01-11";
        $produk->Berat=45;
        $produk->Stock=60;
        $produk->Harga=15000;
        $produk->save();

        $produk = new produk;
        $produk->Id_produk=11111112;
        $produk->Kategori="berat";
        $produk->Isi="Ingredients: Tepung jagung yang diolah dengan sempurna, Minyak sayur untuk menggoreng, Garam, Perasa buatan atau alami, Pengawet untuk menjaga keawetan produk, Pewarna makanan yang aman dikonsumsi";
        $produk->Ukuran=50;
        $produk->Nama="Snack Jagung";
        $produk->Deskripsi="Snack jagung ini terbuat dari tepung jagung pilihan yang dipanggang dan digoreng hingga renyah. Dilengkapi dengan bumbu gurih seperti keju atau BBQ yang memberikan cita rasa yang lezat dan memanjakan lidah. Cocok sebagai camilan atau teman saus salsa dan guacamole.";
        $produk->Expired="2025-03-05";
        $produk->Berat=69;
        $produk->Stock=50;
        $produk->Harga=35000;
        $produk->save();
    }   
}
