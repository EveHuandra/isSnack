<?php
namespace App\Filament\Widgets;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
class ProdukKategoriChart extends ChartWidget
{
 protected static ?string $heading = 'Grafik Kategori Produk';
 protected function getData(): array
 {
 // Mengambil data mahasiswa dari database
 $data = DB::table('produks')
 ->select('Kategori', 'Harga', DB::raw('count(*) as total'))
 ->groupBy('Kategori', 'Harga')
 ->orderBy('Harga', 'asc')
 ->get();
 // Variabel untuk menyusun data grafik
 $Kategori = [];
 $Harga = [];
 $totals = [];
 foreach ($data as $row) {
 if (!in_array($row->Harga, $Harga)) {
 $Harga[] = $row->Harga; // Menambahkan tahunMasuk unik
 }
 $Kategori[$row->Kategori][$row->Harga] = $row->total; // Data per jurusan
 }
 foreach ($Kategori as $name => $values) {
    $totals[] = [
    'label' => $name, // Nama jurusan
    'data' => array_values(array_replace(array_fill_keys($Harga, 0), $values)),
   // Data tahunMasuk
    'backgroundColor' => sprintf('#%06X', mt_rand(0, 0xFFFFFF)), // Warna acak
    ];
    }
    // Mengembalikan data dalam format yang dapat diterima Chart.js
    return [
    'datasets' => $totals,
    'labels' => $Harga,
    'options' => [
    'responsive' => true, // Membuat grafik responsif
    'maintainAspectRatio' => false, // Memastikan grafik dapat menyesuaikan ukuran box
    ],
    ];
    }
    protected function getType(): string
    {
    return 'bar'; // Ubah ke 'line' jika ingin tipe grafik garis
    }
   }
