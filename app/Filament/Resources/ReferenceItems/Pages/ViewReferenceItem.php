<?php

namespace App\Filament\Resources\ReferenceItems\Pages;

use App\Filament\Resources\ReferenceItems\ReferenceItemResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReferenceItem extends ViewRecord
{
    protected static string $resource = ReferenceItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
