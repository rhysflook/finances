<?php

namespace App\Filament\Resources\ReferenceItemFiles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReferenceItemFileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('reference_item_id')
                    ->required()
                    ->numeric(),
                TextInput::make('file_name')
                    ->required(),
                TextInput::make('file_path')
                    ->required(),
            ]);
    }
}
