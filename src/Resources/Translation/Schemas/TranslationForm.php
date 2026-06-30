<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class TranslationForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
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
