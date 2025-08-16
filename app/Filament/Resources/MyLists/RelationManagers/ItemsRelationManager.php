<?php

namespace App\Filament\Resources\MyLists\RelationManagers;

use App\Filament\Resources\MyListItems\MyListItemResource;
use Filament\Actions\BulkAction;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

    // protected static ?string $relatedResource = MyListItemResource::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('item_name')
                    ->required(),
                Textarea::make('item_description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ])
            ->toolbarActions([
                BulkAction::make('delete')
                ->requiresConfirmation()
                ->action(fn ($records) => $records->each->delete())
            ])
            ->columns([
                TextColumn::make('item_name')
                    ->label('Item Name'),
                TextColumn::make('item_description')
                    ->label('Description'),
            ]);
    }
}
