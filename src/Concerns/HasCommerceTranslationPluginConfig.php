<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceTranslationPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-translation';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Growth';
    }
}
