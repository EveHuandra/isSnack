<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CartResource\Pages;
use App\Filament\Resources\CartResource\RelationManagers;
use App\Models\Cart;
use App\Imports\CartImport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;


class CartResource extends Resource
{
    protected static ?string $model = Cart::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Id_cart')
                ->label('Id Cart')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('Id_produk')
                ->label('Id Produk')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('Qty')
                ->label('Quantity')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('Deskripsi')
                ->label('Deskripsi')
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Id_cart')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Id_produk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Qty')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Deskripsi')->sortable()->searchable(),
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
                    Excel::import(new CartImport, $filePath);
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
                ->modalHeading('Import Data Mahasiswa')
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
            'index' => Pages\ListCarts::route('/'),
            'create' => Pages\CreateCart::route('/create'),
            'edit' => Pages\EditCart::route('/{record}/edit'),
        ];
    }
}
