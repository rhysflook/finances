<?php

namespace App\Filament\Resources\CreditCardPayments\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CreditCardPaymentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('credit_card_id')
                    ->numeric(),
                TextEntry::make('amount')
                    ->numeric(),
                TextEntry::make('payment_date')
                    ->date(),
                TextEntry::make('name'),
                TextEntry::make('category_id')
                    ->numeric(),
                TextEntry::make('sub_category_id')
                    ->numeric(),
                TextEntry::make('vendor'),
                IconEntry::make('is_paid')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
