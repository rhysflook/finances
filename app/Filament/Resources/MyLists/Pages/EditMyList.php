<?php

namespace App\Filament\Resources\MyLists\Pages;

use App\Filament\Resources\MyLists\MyListResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMyList extends EditRecord
{
    protected static string $resource = MyListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
