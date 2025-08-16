<?php

namespace App\Filament\Resources\ScheduledItems\Pages;

use App\Filament\Resources\ScheduledItems\ScheduledItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateScheduledItem extends CreateRecord
{
    protected static string $resource = ScheduledItemResource::class;
}
