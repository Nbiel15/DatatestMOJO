<?php

namespace App\Filament\Resources\LoginGuideResource\Pages;

use App\Filament\Resources\LoginGuideResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLoginGuides extends ListRecords
{
    protected static string $resource = LoginGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
