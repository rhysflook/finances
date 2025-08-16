<?php

namespace App\Filament\Resources\MyListItems\Pages;

use App\Filament\Resources\MyListItems\MyListItemResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMyListItem extends ViewRecord
{
    protected static string $resource = MyListItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
