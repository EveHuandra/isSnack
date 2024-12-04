<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class ProdukKategoriStat extends BaseWidget
{
    protected function getStats(): array
    {
        // Menghitung total kategori produk
        $totalKategori = DB::table('produks')
            ->distinct('Kategori') // Mengambil kategori unik
            ->count('Kategori');

        // Menghitung total produk
        $totalProduk = DB::table('produks')->count();

        // Menghitung rata-rata harga produk
        $rataHarga = DB::table('produks')->avg('Harga');

        return [
            Card::make('Total Kategori', $totalKategori)
                ->description('Jumlah kategori produk unik')
                ->descriptionIcon('heroicon-s-tag')
                ->color('info'),

            Card::make('Total Produk', $totalProduk)
                ->description('Jumlah total produk dalam semua kategori')
                ->descriptionIcon('heroicon-s-archive-box')
                ->color('success'),

            Card::make('Rata-rata Harga', 'Rp' . number_format($rataHarga, 2))
                ->description('Rata-rata harga produk di semua kategori')
                ->descriptionIcon('heroicon-s-currency-dollar')
                ->color('primary'),
        ];
    }
}
