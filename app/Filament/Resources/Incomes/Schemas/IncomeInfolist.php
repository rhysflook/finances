<?php

namespace App\Filament\Resources\Incomes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class IncomeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('reason'),
                TextEntry::make('amount')
                    ->numeric(),
                TextEntry::make('category'),
                TextEntry::make('date')
                    ->date(),
                TextEntry::make('currency_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
