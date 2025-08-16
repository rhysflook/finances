<?php

namespace App\Filament\Resources\Todos\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ToggleColumn;

class TodoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('item')
                    ->label('Item')
                    ->required(),
                Textarea::make('description')
                    ->label('Description')
                    ->required(),
                Toggle::make('is_complete')
                    ->label('Is Complete')
                    ->required(),
            ]);
    }
}
