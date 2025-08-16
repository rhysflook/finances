<?php

namespace App\Filament\Resources\InItems;

use App\Filament\Resources\InItems\Pages\CreateInItem;
use App\Filament\Resources\InItems\Pages\EditInItem;
use App\Filament\Resources\InItems\Pages\ListInItems;
use App\Filament\Resources\InItems\Pages\ViewInItem;
use App\Filament\Resources\InItems\Schemas\InItemForm;
use App\Filament\Resources\InItems\Schemas\InItemInfolist;
use App\Filament\Resources\InItems\Tables\InItemsTable;
use App\Models\InItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class InItemResource extends Resource
{
    protected static ?string $model = InItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Organization';
    public static function form(Schema $schema): Schema
    {
        return InItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InItemsTable::configure($table);
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
            'index' => ListInItems::route('/'),
            'create' => CreateInItem::route('/create'),
            'view' => ViewInItem::route('/{record}'),
            'edit' => EditInItem::route('/{record}/edit'),
        ];
    }
}
