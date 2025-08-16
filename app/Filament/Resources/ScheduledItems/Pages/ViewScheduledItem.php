<?php

namespace App\Filament\Resources\ScheduledItems\Pages;

use App\Filament\Resources\ScheduledItems\ScheduledItemResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewScheduledItem extends ViewRecord
{
    protected static string $resource = ScheduledItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
