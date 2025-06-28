<?php

namespace App\Filament\Resources\Bills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('bill')
                    ->required(),
                TextInput::make('amount')
                    ->numeric(),
                Toggle::make('is_fixed_amount')
                    ->required(),
                Select::make('category_id')
                    ->required()
                    ->relationship('category', 'name'),
                Select::make('currency_id')
                    ->required()
                    ->relationship('currency', 'name'),
            ]);
    }
}
