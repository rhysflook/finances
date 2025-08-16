<?php

namespace App\Filament\Resources\MyLists\Pages;

use App\Filament\Resources\MyLists\MyListResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMyLists extends ListRecords
{
    protected static string $resource = MyListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
