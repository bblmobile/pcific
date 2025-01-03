<?php

namespace App\Filament\Resources\BasariResource\Pages;

use App\Filament\Resources\BasariResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBasaris extends ListRecords
{
    protected static string $resource = BasariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
