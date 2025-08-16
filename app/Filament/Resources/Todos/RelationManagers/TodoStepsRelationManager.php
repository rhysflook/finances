<?php

namespace App\Filament\Resources\Todos\RelationManagers;

use App\Filament\Resources\Todos\TodoResource;
use Dom\Text;
use Filament\Actions\BulkAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class TodoStepsRelationManager extends RelationManager
{
    protected static string $relationship = 'todoSteps';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('step')->required(),
                Textarea::make('description')
                    ->label('Description')
                    ->required(),
                Forms\Components\TextInput::make('sort_order')->numeric()->required(),
            ]);
    }
    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
                // DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkAction::make('delete')
                ->requiresConfirmation()
                ->action(fn ($records) => $records->each->delete())
            ])
            ->columns([
                TextColumn::make('sort_order')->sortable()->searchable(),
                TextColumn::make('step')->sortable()->searchable(),
                TextColumn::make('description')->sortable()->searchable(),
                ToggleColumn::make('is_complete')->sortable()->searchable(),
            ])
            ->defaultSort('sort_order');
    }
}
