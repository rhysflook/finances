<?php

namespace App\Filament\Resources\MyLists\Pages;

use App\Filament\Resources\MyLists\MyListResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMyList extends CreateRecord
{
    protected static string $resource = MyListResource::class;
}
