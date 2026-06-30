<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Translation\CommerceTranslationPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommerceTranslationPlugin::make(),
            ]);
    }
}
