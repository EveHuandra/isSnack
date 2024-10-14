<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Id_transaction')
                ->label('Id Transaction')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('Transaction_number')
                ->label('Transaction Number')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('Total_berat')
                ->label('Total Berat')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('Phone')
                ->label('Phone')
                ->required(),
                Forms\Components\TextInput::make('No_resi')
                ->label('No, Resi')
                ->required(),
                Forms\Components\TextInput::make('Kurir')
                ->label('Kurir')
                ->required(),
                Forms\Components\TextInput::make('Kota')
                ->label('Kota')
                ->required(),
                Forms\Components\TextInput::make('Ongkir')
                ->label('Ongkir')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('Total')
                ->label('Total')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('Status')
                ->label('Status')
                ->required(),
                Forms\Components\DateTimePicker::make('Date')
                ->label('Date')
                ->required(),
                Forms\Components\TextInput::make('Address')
                ->label('Address')
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Id_transaction')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Transaction_number')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Total_berat')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Phone')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('No_resi')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Kurir')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Kota')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Ongkir')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Total')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Status')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Date')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Address')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
