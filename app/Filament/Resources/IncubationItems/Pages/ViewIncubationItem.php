<?php

namespace App\Filament\Resources\IncubationItems\Pages;

use App\Filament\Resources\IncubationItems\IncubationItemResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewIncubationItem extends ViewRecord
{
    protected static string $resource = IncubationItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
