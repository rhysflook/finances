<?php

namespace App\Filament\Resources\MyLists;

use App\Filament\Resources\MyLists\Pages\CreateMyList;
use App\Filament\Resources\MyLists\Pages\EditMyList;
use App\Filament\Resources\MyLists\Pages\ListMyLists;
use App\Filament\Resources\MyLists\Pages\ViewMyList;
use App\Filament\Resources\MyLists\RelationManagers\ItemsRelationManager;
use App\Filament\Resources\MyLists\Schemas\MyListForm;
use App\Filament\Resources\MyLists\Schemas\MyListInfolist;
use App\Filament\Resources\MyLists\Tables\MyListsTable;
use App\Models\MyList;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MyListResource extends Resource
{
    protected static ?string $model = MyList::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Organization';

    public static function form(Schema $schema): Schema
    {
        return MyListForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MyListInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MyListsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            ItemsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMyLists::route('/'),
            'create' => CreateMyList::route('/create'),
            'view' => ViewMyList::route('/{record}'),
            'edit' => EditMyList::route('/{record}/edit'),
        ];
    }
}
