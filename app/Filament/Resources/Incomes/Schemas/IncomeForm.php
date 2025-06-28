<?php

namespace App\Filament\Resources\Incomes\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class IncomeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('reason')
                    ->required(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('category')
                    ->required(),
                DatePicker::make('date')
                    ->required(),
                Select::make('currency_id')
                    ->required()
                    ->relationship('currency', 'name'),
            ]);
    }
}
