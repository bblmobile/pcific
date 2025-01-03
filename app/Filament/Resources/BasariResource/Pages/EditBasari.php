<?php

namespace App\Filament\Resources\BasariResource\Pages;

use App\Filament\Resources\BasariResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBasari extends EditRecord
{
    protected static string $resource = BasariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
