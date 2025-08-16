<?php

namespace App\Filament\Resources\ReferenceItems;

use App\Filament\Resources\ReferenceItems\Pages\CreateReferenceItem;
use App\Filament\Resources\ReferenceItems\Pages\EditReferenceItem;
use App\Filament\Resources\ReferenceItems\Pages\ListReferenceItems;
use App\Filament\Resources\ReferenceItems\Pages\ViewReferenceItem;
use App\Filament\Resources\ReferenceItems\RelationManagers\FilesRelationManager;
use App\Filament\Resources\ReferenceItems\Schemas\ReferenceItemForm;
use App\Filament\Resources\ReferenceItems\Schemas\ReferenceItemInfolist;
use App\Filament\Resources\ReferenceItems\Tables\ReferenceItemsTable;
use App\Models\ReferenceItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ReferenceItemResource extends Resource
{
    protected static ?string $model = ReferenceItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Organization';
    public static function form(Schema $schema): Schema
    {
        return ReferenceItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ReferenceItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReferenceItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            FilesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReferenceItems::route('/'),
            'create' => CreateReferenceItem::route('/create'),
            'view' => ViewReferenceItem::route('/{record}'),
            'edit' => EditReferenceItem::route('/{record}/edit'),
        ];
    }
}
