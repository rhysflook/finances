<?php

namespace App\Filament\Resources\Todos\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TodosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('item')
                    ->label('Item')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->sortable()
                    ->searchable(),
                ToggleColumn::make('is_complete')
                    ->label('Is Complete')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('project.name')
                    ->label('Project')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                SelectFilter::make('project_id')
                    ->label('Project')
                    ->relationship('project', 'name'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
