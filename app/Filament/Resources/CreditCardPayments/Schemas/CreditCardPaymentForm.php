<?php

namespace App\Filament\Resources\CreditCardPayments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CreditCardPaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('credit_card_id')
                    ->required()
                    ->relationship('creditCard', 'name'),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                DatePicker::make('payment_date')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Select::make('category_id')
                    ->required()
                    ->relationship('category', 'name'),
                Select::make('sub_category_id')
                    ->relationship('subCategory', 'name'),
                TextInput::make('vendor'),
                Toggle::make('is_paid')
                    ->required(),
            ]);
    }
}
