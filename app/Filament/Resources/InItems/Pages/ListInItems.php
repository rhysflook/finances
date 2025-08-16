<?php

namespace App\Filament\Resources\InItems\Pages;

use App\Filament\Resources\InItems\InItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInItems extends ListRecords
{
    protected static string $resource = InItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
