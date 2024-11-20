<?php
namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class TanggalProdukChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Produk Terjual';

    protected function getData(): array
    {
        // Ambil data dari database berdasarkan Date
        $data = DB::table('transactions')
            ->select('Date', DB::raw('count(*) as total'))
            ->groupBy('Date')
            ->orderBy('Date', 'asc')
            ->get();

        // Menyusun data untuk chart
        $labels = [];
        $values = [];

        foreach ($data as $row) {
            $labels[] = $row->Date; // Label tanggal
            $values[] = $row->total; // Total penjualan per tanggal
        }

        // Format data untuk Chart.js
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Produk Terjual',
                    'data' => $values, // Data penjualan
                    'backgroundColor' => array_map(function () {
                        return sprintf('#%06X', mt_rand(0, 0xFFFFFF)); // Warna acak
                    }, range(0, count($values) - 1)),
                ],
            ],
            'labels' => $labels, // Tanggal sebagai label
        ];
    }

    protected function getType(): string
    {
        return 'pie'; // Jenis grafik pie
    }
}
