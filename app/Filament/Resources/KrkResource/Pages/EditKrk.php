<?php

namespace App\Filament\Resources\KrkResource\Pages;

use App\Filament\Resources\KrkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKrk extends EditRecord
{
    protected static string $resource = KrkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
