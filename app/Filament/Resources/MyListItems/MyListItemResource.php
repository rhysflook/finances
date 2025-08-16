<?php

namespace App\Filament\Resources\MyListItems;

use App\Filament\Resources\MyListItems\Pages\CreateMyListItem;
use App\Filament\Resources\MyListItems\Pages\EditMyListItem;
use App\Filament\Resources\MyListItems\Pages\ListMyListItems;
use App\Filament\Resources\MyListItems\Pages\ViewMyListItem;
use App\Filament\Resources\MyListItems\Schemas\MyListItemForm;
use App\Filament\Resources\MyListItems\Schemas\MyListItemInfolist;
use App\Filament\Resources\MyListItems\Tables\MyListItemsTable;
use App\Models\MyListItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MyListItemResource extends Resource
{
    protected static ?string $model = MyListItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Organization';
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return MyListItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MyListItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MyListItemsTable::configure($table);
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
            'index' => ListMyListItems::route('/'),
            'create' => CreateMyListItem::route('/create'),
            'view' => ViewMyListItem::route('/{record}'),
            'edit' => EditMyListItem::route('/{record}/edit'),
        ];
    }
}
