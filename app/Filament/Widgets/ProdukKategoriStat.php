<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class ProdukKategoriStat extends BaseWidget
{
    protected function getStats(): array
    {
        //Query untuk menghitung kategori produk
        $produkKategori = DB::table ('produks')->count();
        return [
            Card::make('Produk Kategori Stat', $produkKategori)
            ->description('Statistik kategori produk')
            ->descriptionIcon('heroicon-s-academic-cap')->color('success'),
        ];
    }
}
