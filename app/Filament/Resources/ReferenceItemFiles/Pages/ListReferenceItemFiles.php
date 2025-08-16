<?php

namespace App\Filament\Resources\ReferenceItemFiles\Pages;

use App\Filament\Resources\ReferenceItemFiles\ReferenceItemFileResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReferenceItemFiles extends ListRecords
{
    protected static string $resource = ReferenceItemFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
