<?php

namespace App\Filament\Resources\ReferenceItems\RelationManagers;

use App\Filament\Resources\ReferenceItemFiles\ReferenceItemFileResource;
use App\Filament\Tables\Columns\DownloadFileColumn;
use Filament\Actions\BulkAction;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FilesRelationManager extends RelationManager
{
    protected static string $relationship = 'files';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('file_name')
                    ->required()->preserveFilenames()->downloadable(),

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
                TextColumn::make('file_name')
                    ->label('File Name'),
                DownloadFileColumn::make('download')

            ]);
    }
}
