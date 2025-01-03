<?php

namespace App\Filament\Resources\OyuncuResource\Pages;

use App\Filament\Resources\OyuncuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOyuncus extends ListRecords
{
    protected static string $resource = OyuncuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
