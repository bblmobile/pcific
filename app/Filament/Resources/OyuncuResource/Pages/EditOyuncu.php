<?php

namespace App\Filament\Resources\OyuncuResource\Pages;

use App\Filament\Resources\OyuncuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOyuncu extends EditRecord
{
    protected static string $resource = OyuncuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
