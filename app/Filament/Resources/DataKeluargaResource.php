<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataKeluargaResource\Pages;
use App\Models\DataKeluarga;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DataKeluargaResource extends Resource
{
    protected static ?string $model = DataKeluarga::class;

    protected static ?string $navigationIcon = 'heroicon-o-users'; // bisa diganti sesuai selera
    protected static ?string $navigationLabel = 'Data Keluarga';
    protected static ?string $pluralLabel = 'Data Keluarga';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('data-keluarga-images')
                    ->nullable(),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('No'),
                Tables\Columns\TextColumn::make('title')->label('Judul')->searchable(),
                Tables\Columns\ImageColumn::make('image')->label('Gambar'),
                Tables\Columns\TextColumn::make('description')->label('Deskripsi')->limit(50),
                Tables\Columns\TextColumn::make('updated_at')->label('Diperbarui')->date('d/m/Y'),
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
            'index' => Pages\ListDataKeluargas::route('/'),
            'create' => Pages\CreateDataKeluarga::route('/create'),
            'edit' => Pages\EditDataKeluarga::route('/{record}/edit'),
        ];
    }
}
