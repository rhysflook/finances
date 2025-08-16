<?php

namespace App\Filament\Resources\ReferenceItemFiles\Pages;

use App\Filament\Resources\ReferenceItemFiles\ReferenceItemFileResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditReferenceItemFile extends EditRecord
{
    protected static string $resource = ReferenceItemFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
