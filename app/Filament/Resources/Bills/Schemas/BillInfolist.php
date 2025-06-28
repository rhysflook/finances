<?php

namespace App\Filament\Resources\Bills\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BillInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('bill'),
                TextEntry::make('amount')
                    ->numeric(),
                IconEntry::make('is_fixed_amount')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('category_id')
                    ->numeric(),
                TextEntry::make('currency_id')
                    ->numeric(),
            ]);
    }
}
