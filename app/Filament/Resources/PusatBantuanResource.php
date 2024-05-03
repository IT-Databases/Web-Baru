<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PusatBantuanResource\Pages;
use App\Filament\Resources\PusatBantuanResource\RelationManagers;
use App\Models\PusatBantuan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PusatBantuanResource extends Resource
{
    protected static ?string $model = PusatBantuan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('nomor_telepon'),
                TextColumn::make('email'),
                TextColumn::make('kendala')
                    ->wrap(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListPusatBantuans::route('/'),
            'create' => Pages\CreatePusatBantuan::route('/create'),
            'edit' => Pages\EditPusatBantuan::route('/{record}/edit'),
        ];
    }
}
