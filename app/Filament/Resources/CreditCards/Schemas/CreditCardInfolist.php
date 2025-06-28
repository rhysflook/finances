<?php

namespace App\Filament\Resources\CreditCards\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CreditCardInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('currency_id')
                    ->numeric(),
                TextEntry::make('expiry_date')
                    ->date(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
