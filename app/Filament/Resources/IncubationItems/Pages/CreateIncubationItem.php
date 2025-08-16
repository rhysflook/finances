<?php

namespace App\Filament\Resources\IncubationItems\Pages;

use App\Filament\Resources\IncubationItems\IncubationItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateIncubationItem extends CreateRecord
{
    protected static string $resource = IncubationItemResource::class;
}
