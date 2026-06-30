<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\TranslationResource;

class EditTranslation extends EditRecord
{
    protected static string $resource = TranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
