<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TranslationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('translatable_type'),
                        TextInput::make('translatable_id'),
                        TextInput::make('locale'),
                        TextInput::make('field'),
                        TextInput::make('value'),
                    ])->columns(2),
            ]);
    }
}
