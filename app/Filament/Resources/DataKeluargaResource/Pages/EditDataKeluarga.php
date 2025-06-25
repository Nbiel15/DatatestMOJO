<?php

namespace App\Filament\Resources\DataKeluargaResource\Pages;

use App\Filament\Resources\DataKeluargaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataKeluarga extends EditRecord
{
    protected static string $resource = DataKeluargaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
