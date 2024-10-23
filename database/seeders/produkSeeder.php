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

        $produk = new produk;
        $produk->Id_produk=11111113;
        $produk->Kategori="ringan";
        $produk->Isi="Ingredients: tepung terigu, gula pasir, mentega, telur dan baking powder";
        $produk->Ukuran=15;
        $produk->Nama="Snack Biskuit";
        $produk->Deskripsi="Biskuit renyah yang dipanggang sempurna dengan cita rasa manis atau gurih, tersedia dalam berbagai varian seperti cokelat, vanila, atau keju. Biskuit ini cocok sebagai camilan ringan atau teman minum teh dan kopi.";
        $produk->Expired="2025-03-18";
        $produk->Berat=30;
        $produk->Stock=50;
        $produk->Harga=20000;
        $produk->save();

        $produk = new produk;
        $produk->Id_produk=11111114;
        $produk->Kategori="ringan";
        $produk->Isi="Ingredients: coklat susu, gula, susu bubuk, karamel dan rasa tambahan seperti mint";
        $produk->Ukuran=20;
        $produk->Nama="Cokelat Bar";
        $produk->Deskripsi="Cokelat bar yang lezat dan manis, tersedia dalam berbagai varian seperti cokelat susu, cokelat hitam, atau cokelat putih. Produk ini dilengkapi dengan tambahan kacang, karamel, atau isian buah kering yang membuatnya semakin kaya rasa. Ideal untuk ngemil saat butuh energi cepat atau untuk dinikmati saat bersantai.";
        $produk->Expired="2025-05-14";
        $produk->Berat=40;
        $produk->Stock=30;
        $produk->Harga=35000;
        $produk->save();

        $produk = new produk;
        $produk->Id_produk=11111115;
        $produk->Kategori="ringan";
        $produk->Isi="Ingredients: tepung tapioka, minyak goreng, garam dan penyedap rasa kaldu ayam";
        $produk->Ukuran=25;
        $produk->Nama="Crackers";
        $produk->Deskripsi="Kerupuk renyah dengan cita rasa gurih yang cocok untuk dinikmati sebagai camilan atau pelengkap makanan. Tersedia dalam berbagai rasa, seperti rasa original, udang, dan ikan. Produk ini diolah dengan menggunakan bahan-bahan alami yang dikombinasikan dengan bumbu spesial.";
        $produk->Expired="2025-05-25";
        $produk->Berat=35;
        $produk->Stock=40;
        $produk->Harga=25000;
        $produk->save();
    }   
}
