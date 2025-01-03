<?php

namespace App\Filament\Resources\TakimResource\Pages;

use App\Filament\Resources\TakimResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTakim extends EditRecord
{
    protected static string $resource = TakimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
