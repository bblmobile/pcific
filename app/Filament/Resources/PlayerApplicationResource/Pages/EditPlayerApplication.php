<?php

namespace App\Filament\Resources\PlayerApplicationResource\Pages;

use App\Filament\Resources\PlayerApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlayerApplication extends EditRecord
{
    protected static string $resource = PlayerApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
