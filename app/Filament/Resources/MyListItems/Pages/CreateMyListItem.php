<?php

namespace App\Filament\Resources\MyListItems\Pages;

use App\Filament\Resources\MyListItems\MyListItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMyListItem extends CreateRecord
{
    protected static string $resource = MyListItemResource::class;
}
