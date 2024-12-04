<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class TanggalProdukStat extends BaseWidget
{
    protected function getStats(): array
    {
        // Menghitung total produk terjual (berdasarkan transaksi)
        $totalTerjual = DB::table('transactions')->count();

        // Menghitung total penjualan pada hari ini
        $penjualanHariIni = DB::table('transactions')
            ->whereDate('Date', now()->toDateString())
            ->count();

        return [
            Card::make('Total Produk Terjual', $totalTerjual)
                ->description('Total produk terjual berdasarkan data transaksi')
                ->descriptionIcon('heroicon-s-chart-bar')
                ->color('success'),

            Card::make('Penjualan Hari Ini', $penjualanHariIni)
                ->description('Jumlah produk terjual hari ini')
                ->descriptionIcon('heroicon-s-calendar')
                ->color('primary'),
        ];
    }
}
