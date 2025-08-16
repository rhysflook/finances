<?php

namespace App\Filament\Resources\ReferenceItemFiles\Pages;

use App\Filament\Resources\ReferenceItemFiles\ReferenceItemFileResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReferenceItemFile extends ViewRecord
{
    protected static string $resource = ReferenceItemFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
