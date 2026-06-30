<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Translation\Concerns\HasCommerceTranslationPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\TranslationResource;

class CommerceTranslationPlugin implements Plugin
{
    use HasCommerceTranslationPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-translation';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'translation' => TranslationResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
