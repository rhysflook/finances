<?php

namespace App\Filament\Resources\MyLists\Pages;

use App\Filament\Resources\MyLists\MyListResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMyList extends ViewRecord
{
    protected static string $resource = MyListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
