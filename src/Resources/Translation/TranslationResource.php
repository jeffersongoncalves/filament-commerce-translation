<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Translation\Models\Translation;
use JeffersonGoncalves\FilamentCommerce\Translation\CommerceTranslationPlugin;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Pages\CreateTranslation;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Pages\EditTranslation;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Pages\ListTranslation;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Schemas\TranslationForm;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Tables\TranslationTable;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceTranslationPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-translation.navigation_group', 'Commerce — Growth');
        }
    }

    public static function form(Schema $schema): Schema
    {
        return TranslationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TranslationTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTranslation::route('/'),
            'create' => CreateTranslation::route('/create'),
            'edit' => EditTranslation::route('/{record}/edit'),
        ];
    }
}
