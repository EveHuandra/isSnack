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

        $produk = new produk;
        $produk->Id_produk=11111116;
        $produk->Kategori="ringan";
        $produk->Isi="Ingredients: Tepung terigu, Susu bubuk, Gula pasir, Minyak nabati, Baking soda";
        $produk->Ukuran=40;
        $produk->Nama="Cookies";
        $produk->Deskripsi="Cookies lezat yang dipanggang dengan sempurna, memiliki tekstur yang renyah di luar namun lembut di dalam. Tersedia dalam berbagai varian rasa seperti cokelat, kacang, dan vanilla.";
        $produk->Expired="2025-06-15";
        $produk->Berat=50;
        $produk->Stock=70;
        $produk->Harga=15000;
        $produk->save();

        $produk = new produk;
        $produk->Id_produk=11111117;
        $produk->Kategori="berat";
        $produk->Isi="Ingredients: Tepung gandum utuh, Air, Garam, Ragi, Minyak zaitun";
        $produk->Ukuran=500;
        $produk->Nama="Roti Gandum";
        $produk->Deskripsi="Roti sehat berbahan dasar gandum utuh, diperkaya dengan serat dan nutrisi. Cocok untuk sarapan atau teman makan siang. Nikmati dengan selai, keju, atau mentega.";
        $produk->Expired="2025-07-01";
        $produk->Berat=550;
        $produk->Stock=40;
        $produk->Harga=20000;
        $produk->save();

        $produk = new produk;
        $produk->Id_produk=11111118;
        $produk->Kategori="ringan";
        $produk->Isi="Ingredients: Susu segar, Gula, Bubuk Kakao, Krim, Vanili";
        $produk->Ukuran=200;
        $produk->Nama="Cokelat Cair";
        $produk->Deskripsi="Cokelat cair lezat yang dapat dinikmati langsung atau digunakan sebagai topping pada roti, pancake, dan es krim. Memiliki rasa manis dan kaya akan cokelat.";
        $produk->Expired="2025-08-10";
        $produk->Berat=220;
        $produk->Stock=35;
        $produk->Harga=40000;
        $produk->save();

        $produk = new produk;
        $produk->Id_produk=11111119;
        $produk->Kategori="berat";
        $produk->Isi="Ingredients: Tepung beras, Santan, Gula, Pewarna makanan alami";
        $produk->Ukuran=300;
        $produk->Nama="Kue Lapis";
        $produk->Deskripsi="Kue tradisional dengan lapisan warna-warni yang terbuat dari bahan alami. Memiliki tekstur kenyal dan rasa manis yang pas, cocok untuk dinikmati di berbagai acara.";
        $produk->Expired="2025-09-01";
        $produk->Berat=350;
        $produk->Stock=25;
        $produk->Harga=30000;
        $produk->save();

        $produk = new produk;
        $produk->Id_produk=11111120;
        $produk->Kategori="berat";
        $produk->Isi="Ingredients: Beras pilihan, Rempah-rempah, Daging ayam, Santan, Minyak goreng";
        $produk->Ukuran=1000;
        $produk->Nama="Nasi Briyani";
        $produk->Deskripsi="Nasi berbumbu khas Timur Tengah yang dimasak dengan rempah-rempah pilihan dan santan, menghasilkan cita rasa gurih dan aroma yang menggugah selera. Cocok untuk santapan utama.";
        $produk->Expired="2025-10-01";
        $produk->Berat=1000;
        $produk->Stock=50;
        $produk->Harga=20000;
        $produk->save();

        $produk = new produk;
        $produk->Id_produk=11111121;
        $produk->Kategori="ringan";
        $produk->Isi="Ingredients: Tepung terigu premium, Gula, Mentega, Kuning telur, Cokelat premium, Susu bubuk";
        $produk->Ukuran=500;
        $produk->Nama="Brownies Cokelat";
        $produk->Deskripsi="Brownies lembut dengan rasa cokelat premium yang kaya dan tekstur yang meleleh di mulut. Cocok untuk camilan santai, acara spesial, atau hadiah manis untuk orang tersayang.";
        $produk->Expired="2025-11-01";
        $produk->Berat=450;
        $produk->Stock=30;
        $produk->Harga=35000;
        $produk->save();
    }   
}
