<?php

namespace App\Filament\Resources\IncubationItems;

use App\Filament\Resources\IncubationItems\Pages\CreateIncubationItem;
use App\Filament\Resources\IncubationItems\Pages\EditIncubationItem;
use App\Filament\Resources\IncubationItems\Pages\ListIncubationItems;
use App\Filament\Resources\IncubationItems\Pages\ViewIncubationItem;
use App\Filament\Resources\IncubationItems\Schemas\IncubationItemForm;
use App\Filament\Resources\IncubationItems\Schemas\IncubationItemInfolist;
use App\Filament\Resources\IncubationItems\Tables\IncubationItemsTable;
use App\Models\IncubationItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class IncubationItemResource extends Resource
{
    protected static ?string $model = IncubationItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Organization';

    public static function form(Schema $schema): Schema
    {
        return IncubationItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return IncubationItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IncubationItemsTable::configure($table);
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
            'index' => ListIncubationItems::route('/'),
            'create' => CreateIncubationItem::route('/create'),
            'view' => ViewIncubationItem::route('/{record}'),
            'edit' => EditIncubationItem::route('/{record}/edit'),
        ];
    }
}
