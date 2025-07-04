<?php

namespace App\Filament\Resources\Expenses\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ExpenseInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('amount')
                    ->numeric(),
                TextEntry::make('category'),
                // TextEntry::make('subcategory'),
                TextEntry::make('vendor'),
                TextEntry::make('description'),
                TextEntry::make('currency_id')
                    ->numeric(),
                TextEntry::make('date')
                    ->date(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
