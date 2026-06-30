<?php

namespace JeffersonGoncalves\FilamentCommerce\Translation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceTranslationServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-translation';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
