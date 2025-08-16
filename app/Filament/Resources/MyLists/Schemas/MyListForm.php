<?php

namespace App\Filament\Resources\MyLists\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MyListForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
