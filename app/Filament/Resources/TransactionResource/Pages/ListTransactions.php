<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\DB;

class ListTransactions extends ListRecords
{
    protected static string $resource = TransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan')
            ->label('Cetak Laporan')
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan())
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Transaction')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan?'),

            Actions\Action::make('cetak_laporan_final')
            ->label('Cetak Laporan Final')
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakFinal())
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Final')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan?'),
        ];

            
    }
    public static function cetakLaporan()
    {
        // Ambil data pengguna
        $data = \App\Models\transaction::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.transaction', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-transaction.pdf');
    }

    public static function cetakFinal()
    {
        // Ambil data pengguna
        $data = DB::select('
            SELECT 
                t.No_resi AS no_resi_pesanan,
                p.Nama AS nama_produk,
                c.Username AS username,
                t.Harga AS total_harga_produk
            FROM transactions t
            JOIN customers c ON t.Id_customer = c.Id_customer
            JOIN produks p ON t.Id_produk = p.Id_produk;


        ');

        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.laporan', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-final.pdf');
    }
}
