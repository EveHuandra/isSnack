<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Imports\ProdukImport;
use App\Models\Produk;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('Id_produk')
            ->label('Id Produk')
            ->required()
            ->numeric(),
            Forms\Components\TextInput::make('Kategori')
            ->label('Kategori')
            ->required(),
            Forms\Components\TextInput::make('Isi')
            ->label('Isi')
            ->required(),
            Forms\Components\TextInput::make('Ukuran')
            ->label('Ukuran')
            ->required()
            ->numeric(),
            Forms\Components\TextInput::make('Nama')
            ->label('Nama')
            ->required(),
            Forms\Components\TextInput::make('Deskripsi')
            ->label('Deskripsi')
            ->required(),
            Forms\Components\DateTimePicker::make('Expired')
            ->label('Expired')
            ->required(),
            Forms\Components\TextInput::make('Berat')
            ->label('Berat')
            ->required()
            ->numeric(),
            Forms\Components\TextInput::make('Stock')
            ->label('Stock')
            ->required()
            ->numeric(),
            Forms\Components\TextInput::make('Harga')
            ->label('Harga')
            ->required()
            ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Id_produk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Kategori')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Isi')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Ukuran')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Deskripsi')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Expired')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Berat')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Stock')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Harga')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                Action::make('importExcel')
                    ->label('Import Excel')
                    ->action(function (array $data) {
                        // Pastikan $data['file'] adalah jalur yang valid di storage

                        $filePath = storage_path('app/public/' . $data['file']);

                        // Import file menggunakan jalur absolut
                        Excel::import(new ProdukImport, $filePath);
                        // Tampilkan notifikasi sukses
                        Notification::make()
                            ->title('Data berhasil diimpor!')
                            ->success()
                            ->send();
                })
                ->form([
                    FileUpload::make('file')
                        ->label('Pilih File Excel')
                        ->disk('public') // Pastikan disimpan di disk 'public'
                        ->directory('imports')
                        ->acceptedFileTypes(['application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'])
                        ->required(),
                ])
                ->modalHeading('Import Data Produk')
                ->modalButton('Import')
                ->color('success'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}