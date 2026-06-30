<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\TranslationResource;

class ListTranslation extends ListRecords
{
    protected static string $resource = TranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
