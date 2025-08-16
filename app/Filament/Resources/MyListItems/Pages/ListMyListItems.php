<?php

namespace App\Filament\Resources\MyListItems\Pages;

use App\Filament\Resources\MyListItems\MyListItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMyListItems extends ListRecords
{
    protected static string $resource = MyListItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
