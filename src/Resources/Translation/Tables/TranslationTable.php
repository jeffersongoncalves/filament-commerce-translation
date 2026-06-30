<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Tables;

use Filament\Tables\Actions;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TranslationTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('translatable_type')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('translatable_id')
                    ->toggleable(),
                TextColumn::make('locale')
                    ->toggleable(),
                TextColumn::make('field')
                    ->toggleable(),
                TextColumn::make('value')
                    ->toggleable(),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
