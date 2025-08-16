<?php

namespace App\Filament\Resources\ScheduledItems\Pages;

use App\Filament\Resources\ScheduledItems\ScheduledItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListScheduledItems extends ListRecords
{
    protected static string $resource = ScheduledItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
