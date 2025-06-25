<?php

namespace App\Filament\Resources\DataKeluargaResource\Pages;

use App\Filament\Resources\DataKeluargaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataKeluargas extends ListRecords
{
    protected static string $resource = DataKeluargaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
