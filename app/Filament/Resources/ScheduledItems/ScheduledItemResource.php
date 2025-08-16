<?php

namespace App\Filament\Resources\ScheduledItems;

use App\Filament\Resources\ScheduledItems\Pages\CreateScheduledItem;
use App\Filament\Resources\ScheduledItems\Pages\EditScheduledItem;
use App\Filament\Resources\ScheduledItems\Pages\ListScheduledItems;
use App\Filament\Resources\ScheduledItems\Pages\ViewScheduledItem;
use App\Filament\Resources\ScheduledItems\Schemas\ScheduledItemForm;
use App\Filament\Resources\ScheduledItems\Schemas\ScheduledItemInfolist;
use App\Filament\Resources\ScheduledItems\Tables\ScheduledItemsTable;
use App\Models\ScheduledItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ScheduledItemResource extends Resource
{
    protected static ?string $model = ScheduledItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
     protected static string|UnitEnum|null $navigationGroup = 'Organization';
    public static function form(Schema $schema): Schema
    {
        return ScheduledItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ScheduledItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ScheduledItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListScheduledItems::route('/'),
            'create' => CreateScheduledItem::route('/create'),
            'view' => ViewScheduledItem::route('/{record}'),
            'edit' => EditScheduledItem::route('/{record}/edit'),
        ];
    }
}
