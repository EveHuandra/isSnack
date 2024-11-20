<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class TanggalProdukStat extends BaseWidget
{
    protected function getStats(): array
    {
        //Query untuk menghitung kategori produk
        $tanggalProduk = DB::table ('produks')->count();
        return [
            Card::make('Tanggal Produk Stat', $tanggalProduk)
            ->description('Statistik Produk yang dijual per hari dengan harga')
            ->descriptionIcon('heroicon-s-academic-cap')->color('success'),
        ];
    }
}
