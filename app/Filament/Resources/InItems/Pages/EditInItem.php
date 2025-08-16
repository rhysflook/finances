<?php

namespace App\Filament\Resources\InItems\Pages;

use App\Filament\Resources\InItems\InItemResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditInItem extends EditRecord
{
    protected static string $resource = InItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
