<?php

namespace App\Filament\Resources\CuacaResource\Pages;

use App\Filament\Resources\CuacaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCuaca extends EditRecord
{
    protected static string $resource = CuacaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
