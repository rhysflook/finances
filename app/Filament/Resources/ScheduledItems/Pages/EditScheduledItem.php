<?php

namespace App\Filament\Resources\ScheduledItems\Pages;

use App\Filament\Resources\ScheduledItems\ScheduledItemResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditScheduledItem extends EditRecord
{
    protected static string $resource = ScheduledItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
