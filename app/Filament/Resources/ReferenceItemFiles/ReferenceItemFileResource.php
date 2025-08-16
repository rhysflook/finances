<?php

namespace App\Filament\Resources\ReferenceItemFiles;

use App\Filament\Resources\ReferenceItemFiles\Pages\CreateReferenceItemFile;
use App\Filament\Resources\ReferenceItemFiles\Pages\EditReferenceItemFile;
use App\Filament\Resources\ReferenceItemFiles\Pages\ListReferenceItemFiles;
use App\Filament\Resources\ReferenceItemFiles\Pages\ViewReferenceItemFile;
use App\Filament\Resources\ReferenceItemFiles\Schemas\ReferenceItemFileForm;
use App\Filament\Resources\ReferenceItemFiles\Schemas\ReferenceItemFileInfolist;
use App\Filament\Resources\ReferenceItemFiles\Tables\ReferenceItemFilesTable;
use App\Models\ReferenceItemFile;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReferenceItemFileResource extends Resource
{
    protected static ?string $model = ReferenceItemFile::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return ReferenceItemFileForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ReferenceItemFileInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReferenceItemFilesTable::configure($table);
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
            'index' => ListReferenceItemFiles::route('/'),
            'create' => CreateReferenceItemFile::route('/create'),
            'view' => ViewReferenceItemFile::route('/{record}'),
            'edit' => EditReferenceItemFile::route('/{record}/edit'),
        ];
    }
}
