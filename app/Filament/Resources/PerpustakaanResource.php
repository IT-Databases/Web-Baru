<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerpustakaanResource\Pages;
use App\Filament\Resources\PerpustakaanResource\RelationManagers;
use App\Models\Perpustakaan;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PerpustakaanResource extends Resource
{
    protected static ?string $model = Perpustakaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('slug', Str::slug($state));
                    })
                    ->live(),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('ringkasan')
                    ->columnSpan(2)
                    ->required()
                    ->live(),
                FileUpload::make('gambar')
                    ->required()
                    ->image()
                    ->columnSpan(2)
                    ->directory('perpustakaan'),
                FileUpload::make('pdf_file') // FileUpload for the PDF file
                    ->required()
                    ->label('PDF File')
                    ->acceptedFileTypes(['application/pdf'])
                    ->columnSpan(2)
                    ->directory('perpustakaan'),
                TextInput::make('sumber')
                    ->required(),
                TextInput::make('tag')
                    ->required()
                    ->placeholder('buku/laporan'),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('judul')
                     ->searchable()
                     ->wrap(),
                TextColumn::make('sumber'),
                ImageColumn::make('gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPerpustakaans::route('/'),
            'create' => Pages\CreatePerpustakaan::route('/create'),
            'edit' => Pages\EditPerpustakaan::route('/{record}/edit'),
        ];
    }
}
