<?php

namespace App\Filament\Resources\TakimResource\Pages;

use App\Filament\Resources\TakimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTakims extends ListRecords
{
    protected static string $resource = TakimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
