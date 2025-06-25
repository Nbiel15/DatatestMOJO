<?php

namespace App\Filament\Resources\KrkResource\Pages;

use App\Filament\Resources\KrkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKrks extends ListRecords
{
    protected static string $resource = KrkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
