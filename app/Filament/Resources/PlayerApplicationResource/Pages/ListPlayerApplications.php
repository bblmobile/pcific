<?php

namespace App\Filament\Resources\PlayerApplicationResource\Pages;

use App\Filament\Resources\PlayerApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayerApplications extends ListRecords
{
    protected static string $resource = PlayerApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
