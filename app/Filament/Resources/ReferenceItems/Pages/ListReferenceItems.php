<?php

namespace App\Filament\Resources\ReferenceItems\Pages;

use App\Filament\Resources\ReferenceItems\ReferenceItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReferenceItems extends ListRecords
{
    protected static string $resource = ReferenceItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
