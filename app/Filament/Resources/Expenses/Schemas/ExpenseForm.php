<?php

namespace App\Filament\Resources\Expenses\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ExpenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('subcategory'),
                TextInput::make('vendor'),
                TextInput::make('description'),
                Select::make('currency_id')
                    ->required()
                    ->relationship('currency', 'name'),
                DatePicker::make('date')
                    ->required(),
            ]);
    }
}
