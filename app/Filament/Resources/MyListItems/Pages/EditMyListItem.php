<?php

namespace App\Filament\Resources\MyListItems\Pages;

use App\Filament\Resources\MyListItems\MyListItemResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMyListItem extends EditRecord
{
    protected static string $resource = MyListItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
