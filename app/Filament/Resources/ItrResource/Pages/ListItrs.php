<?php

namespace App\Filament\Resources\ItrResource\Pages;

use App\Filament\Resources\ItrResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListItrs extends ListRecords
{
    protected static string $resource = ItrResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
