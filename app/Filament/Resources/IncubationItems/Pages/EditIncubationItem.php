<?php

namespace App\Filament\Resources\IncubationItems\Pages;

use App\Filament\Resources\IncubationItems\IncubationItemResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditIncubationItem extends EditRecord
{
    protected static string $resource = IncubationItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
