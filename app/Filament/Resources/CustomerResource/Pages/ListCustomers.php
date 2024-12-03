<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan')
            ->label('Cetak Laporan')
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan())
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Customer')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan?'),
            ];

    }
    public static function cetakLaporan()
    {
        // Ambil data pengguna
        $data = \App\Models\customer::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.customer', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-customer.pdf');
    }
}
