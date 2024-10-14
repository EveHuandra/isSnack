<?php

namespace Database\Seeders;

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
        DB::table('produks')->insert([
            [
            'Id_produk' => '11111111',
            'Kategori'=> 'ringan',
            'Isi'=>'Ingredients: Kentang, Minyak sayur, Garam, Perasa, Pengawet,Pewarna dan penguat',
            'Ukuran'=>'30',
            'Nama'=>'Potato Chups',
            'Deskripsi'=>'Keripik kentang yang tipis dan renyah ini digoreng dengan sempurna untuk menghasilkan tekstur yang gurih. Tersedia dalam berbagai varian rasa seperti original (asin), BBQ, keju, dan balado. Snack ini cocok untuk dinikmati kapan saja sebagai teman ngemil saat santai.',
            'Expired'=>'2025-01-11',
            'Berat'=>'45',
            'Stock'=>'60',
            'Harga'=>'15000',
        ],

            [
            'Id_produk' => '11111112',
            'Kategori'=> 'berat',
            'Isi'=>'Ingredients: Tepung jagung yang diolah dengan sempurna, Minyak sayur untuk menggoreng, Garam, Perasa buatan atau alami, Pengawet untuk menjaga keawetan produk, Pewarna makanan yang aman dikonsumsi',
            'Ukuran'=>'50',
            'Nama'=>'Snack Jagung',
            'Deskripsi'=>'Snack jagung ini terbuat dari tepung jagung pilihan yang dipanggang dan digoreng hingga renyah. Dilengkapi dengan bumbu gurih seperti keju atau BBQ yang memberikan cita rasa yang lezat dan memanjakan lidah. Cocok sebagai camilan atau teman saus salsa dan guacamole.',
            'Expired'=>'2025-03-05',
            'Berat'=>'69',
            'Stock'=>'50',
            'Harga'=>'35000',
            ],

            [
            'Id_produk' => '11111113',
            'Kategori'=> 'ringan',
            'Isi'=>'Ingredients: tepung terigu, gula pasir, mentega, telur dan baking powder',
            'Ukuran'=>'15',
            'Nama'=>'Snack Biskuit',
            'Deskripsi'=>' Biskuit renyah yang dipanggang sempurna dengan cita rasa manis atau gurih, tersedia dalam berbagai varian seperti cokelat, vanila, atau keju. Biskuit ini cocok sebagai camilan ringan atau teman minum teh dan kopi.',
            'Expired'=>'2025-03-18',
            'Berat'=>'30',
            'Stock'=>'50',
            'Harga'=>'20000',
            ],

        [
            'Id_produk' => '11111114',
            'Kategori'=> 'ringan',
            'Isi'=>'Ingredients: coklat susu, gula, susu bubuk, karamel dan rasa tambahan seperti mint',
            'Ukuran'=>'20',
            'Nama'=>'Cokelat Bar',
            'Deskripsi'=>' Cokelat bar yang lezat dan manis, tersedia dalam berbagai varian seperti cokelat susu, cokelat hitam, atau cokelat putih. Produk ini dilengkapi dengan tambahan kacang, karamel, atau isian buah kering yang membuatnya semakin kaya rasa. Ideal untuk ngemil saat butuh energi cepat atau untuk dinikmati saat bersantai.',
            'Expired'=>'2025-05-14',
            'Berat'=>'40',
            'Stock'=>'30',
            'Harga'=>'35000',
        ],

        [
            'Id_produk' => '11111115',
            'Kategori'=> 'ringan',
            'Isi'=>'Ingredients: tepung tapioka, minyak goreng, garam dan penyedap rasa kaldu ayam',
            'Ukuran'=>'25',
            'Nama'=>'Crackers',
            'Deskripsi'=>' Kerupuk renyah dengan cita rasa gurih yang cocok untuk dinikmati sebagai camilan atau pelengkap makanan. Tersedia dalam berbagai rasa, seperti rasa original, udang, dan ikan. Produk ini diolah dengan menggunakan bahan-bahan alami yang dikombinasikan dengan bumbu spesial.',
            'Expired'=>'2025-05-25',
            'Berat'=>'35',
            'Stock'=>'40',
            'Harga'=>'25000',
        ],
    ]);
}
}
