<?php

namespace App\Filament\Resources\IncubationItems\Pages;

use App\Filament\Resources\IncubationItems\IncubationItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIncubationItems extends ListRecords
{
    protected static string $resource = IncubationItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
