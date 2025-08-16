<?php

namespace App\Filament\Resources\MyListItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MyListItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('my_list_id')
                    ->required()
                    ->numeric(),
                TextInput::make('item_name')
                    ->required(),
                Textarea::make('item_description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
