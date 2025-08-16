<?php

namespace App\Filament\Resources\InItems\Pages;

use App\Filament\Resources\InItems\InItemResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewInItem extends ViewRecord
{
    protected static string $resource = InItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
