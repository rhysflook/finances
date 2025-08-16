<?php

namespace App\Filament\Resources\ReferenceItems\Pages;

use App\Filament\Resources\ReferenceItems\ReferenceItemResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditReferenceItem extends EditRecord
{
    protected static string $resource = ReferenceItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
