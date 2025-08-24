<?php

namespace App\Filament\Resources\InItems\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class InItemForm
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
                Select::make('project_id')
                    ->label('Project')
                    ->relationship('project', 'name')
                    ->required(),
                Select::make('tags')
                    ->label('Tags')
                    ->relationship('tags', 'name')
                    ->preload()
                    ->multiple()
            ]);
    }
}
