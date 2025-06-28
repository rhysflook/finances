<?php

namespace App\Filament\Resources\CreditCards\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CreditCardForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('currency_id')
                    ->required()
                    ->relationship('currency', 'name'),
                DatePicker::make('expiry_date')
                    ->required(),
            ]);
    }
}
