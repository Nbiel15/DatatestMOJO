<?php

namespace App\Filament\Resources\ItrResource\Pages;

use App\Filament\Resources\ItrResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditItr extends EditRecord
{
    protected static string $resource = ItrResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
